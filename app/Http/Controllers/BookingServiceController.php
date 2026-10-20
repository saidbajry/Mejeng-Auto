<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingServiceController extends Controller
{
    public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'nama' => 'required|string|max:100',
        'whatsapp' => 'required|string|max:20',
        'model_mobil' => 'required|string|max:150',
        'layanan' => 'required|string',
        'lokasi_bengkel' => 'required|string',
        'tanggal' => 'required|date|after_or_equal:today',
        'jam' => 'required|string',
        'catatan' => 'nullable|string|max:1000',
    ]);

    // Simpan ke database
    BookingServis::create($validated);

    // Cek jika request dari AJAX (Fetch API)
    if ($request->wantsJson() || $request->ajax()) {
        return response()->json([
            'success' => true,
            'message' => 'Booking servis berhasil disimpan ke database!'
        ], 201);
    }

    return redirect()->back()->with('success', 'Booking servis berhasil diajukan!');
}
}