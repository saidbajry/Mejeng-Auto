<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('cars')
            ->join('car_brands', 'cars.brand_id', '=', 'car_brands.id')
            ->where('cars.status', 'Tersedia')
            ->select('cars.*', 'car_brands.name as brand_name');

        // Pencarian merek, model, atau varian
        if ($request->filled('search')) {
            $search = trim($request->search);

            $query->where(function ($q) use ($search) {
                $q->where('car_brands.name', 'like', "%{$search}%")
                    ->orWhere('cars.model', 'like', "%{$search}%")
                    ->orWhere('cars.variant', 'like', "%{$search}%");
            });
        }

        // Filter bahan bakar
        if ($request->filled('fuel_type')) {
            $query->where('cars.fuel_type', $request->fuel_type);
        }

        // Filter transmisi
        if ($request->filled('transmission')) {
            $query->where('cars.transmission', $request->transmission);
        }

        // Filter kondisi
        if ($request->filled('condition')) {
            $query->where('cars.condition', $request->condition);
        }

        // Filter rentang harga
        if ($request->filled('min_price') && is_numeric($request->min_price)) {
            $query->where('cars.price', '>=', $request->min_price);
        }

        if ($request->filled('max_price') && is_numeric($request->max_price)) {
            $query->where('cars.price', '<=', $request->max_price);
        }

        $cars = $query
            ->orderByDesc('cars.created_at')
            ->paginate(9)
            ->withQueryString();

        return view('beli-mobil', compact('cars'));
    }
}