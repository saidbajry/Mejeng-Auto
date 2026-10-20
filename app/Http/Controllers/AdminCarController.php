<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminCarController extends Controller
{
    private function authorizeAdmin(): void
    {
        abort_unless(
            auth()->check() && auth()->user()->role === 'admin',
            403,
            'Akses hanya untuk administrator.'
        );
    }

    // READ: menampilkan semua mobil
    public function index()
    {
        $this->authorizeAdmin();

        $cars = DB::table('cars')
            ->join('car_brands', 'cars.brand_id', '=', 'car_brands.id')
            ->select('cars.*', 'car_brands.name as brand_name')
            ->orderByDesc('cars.created_at')
            ->get();

        $totalCars = DB::table('cars')->count();
        $availableCars = DB::table('cars')
            ->where('status', 'Tersedia')->count();
        $reservedCars = DB::table('cars')
            ->where('status', 'Dipesan')->count();
        $soldCars = DB::table('cars')
            ->where('status', 'Terjual')->count();

        return view('dashboard-admin', compact(
            'cars',
            'totalCars',
            'availableCars',
            'reservedCars',
            'soldCars'
        ));
    }

    // FORM TAMBAH
    public function create()
    {
        $this->authorizeAdmin();

        $brands = DB::table('car_brands')
            ->orderBy('name')
            ->get();

        return view('admin-cars-create', compact('brands'));
    }

    // CREATE: menyimpan mobil baru
    public function store(Request $request)
    {
        $this->authorizeAdmin();

        $validated = $this->validateCar($request);

        unset($validated['image']);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')
                ->store('cars', 'public');
        }

        DB::table('cars')->insert([
            ...$validated,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('dashboard.admin')
            ->with('success', 'Mobil berhasil ditambahkan!');
    }

    // FORM EDIT
    public function edit(int $id)
    {
        $this->authorizeAdmin();

        $car = DB::table('cars')->where('id', $id)->first();

        abort_unless($car, 404, 'Data mobil tidak ditemukan.');

        $brands = DB::table('car_brands')
            ->orderBy('name')
            ->get();

        return view('admin-cars-edit', compact('car', 'brands'));
    }

    // UPDATE: memperbarui mobil
    public function update(Request $request, int $id)
    {
        $this->authorizeAdmin();

        $car = DB::table('cars')->where('id', $id)->first();

        abort_unless($car, 404, 'Data mobil tidak ditemukan.');

        $validated = $this->validateCar($request);

        unset($validated['image']);

        if ($request->hasFile('image')) {
            $newImage = $request->file('image')
                ->store('cars', 'public');

            if ($car->image_path) {
                Storage::disk('public')->delete($car->image_path);
            }

            $validated['image_path'] = $newImage;
        }

        $validated['updated_at'] = now();

        DB::table('cars')->where('id', $id)->update($validated);

        return redirect()
            ->route('dashboard.admin')
            ->with('success', 'Data mobil berhasil diperbarui!');
    }

    // DELETE: menghapus mobil
    public function destroy(int $id)
    {
        $this->authorizeAdmin();

        $car = DB::table('cars')->where('id', $id)->first();

        abort_unless($car, 404, 'Data mobil tidak ditemukan.');

        if ($car->image_path) {
            Storage::disk('public')->delete($car->image_path);
        }

        DB::table('cars')->where('id', $id)->delete();

        return redirect()
            ->route('dashboard.admin')
            ->with('success', 'Mobil berhasil dihapus!');
    }

    // Validasi digunakan untuk tambah dan edit
    private function validateCar(Request $request): array
    {
        return $request->validate([
            'brand_id' => 'required|exists:car_brands,id',
            'model' => 'required|string|max:150',
            'variant' => 'nullable|string|max:100',
            'year' => 'required|integer|min:1950|max:' . (date('Y') + 1),
            'price' => 'required|numeric|min:0',
            'mileage' => 'required|integer|min:0',
            'transmission' => 'required|in:Manual,Otomatis',
            'fuel_type' => 'required|in:Bensin,Diesel,Hybrid,Listrik,Lainnya',
            'condition' => 'required|in:Baru,Bekas',
            'description' => 'nullable|string',
            'status' => 'required|in:Tersedia,Dipesan,Terjual',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    }
}