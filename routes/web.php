<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AdminCarController;
use App\Http\Controllers\ServiceBookingController;
use App\Http\Controllers\Admin\AdminServiceBookingController;


// Halaman publik
Route::view('/', 'welcome')->name('home');
Route::view('/help', 'help')->name('help');
Route::view('/layanan-servis', 'layanan-service')
    ->name('layanan-servis');

// Katalog mobil untuk user
Route::get('/beli-mobil', [CarController::class, 'index'])
    ->name('beli-mobil');

// Login dan registrasi
Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->middleware('throttle:5,1')
    ->name('login.process');

Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->middleware('throttle:5,1')
    ->name('register.process');

// Dashboard user
Route::get('/dashboard-user', function () {
    abort_unless(
        auth()->check() && auth()->user()->role === 'user',
        403
    );

    return view('dashboard-user');
})->middleware('auth')->name('dashboard.user');

// Dashboard dan CRUD admin
Route::middleware('auth')->group(function () {
    Route::get('/dashboard-admin', [AdminCarController::class, 'index'])
        ->name('dashboard.admin');

    Route::get('/admin/mobil/tambah', [AdminCarController::class, 'create'])
        ->name('admin.cars.create');

    Route::post('/admin/mobil', [AdminCarController::class, 'store'])
        ->name('admin.cars.store');

    Route::get('/admin/mobil/{id}/edit', [AdminCarController::class, 'edit'])
        ->whereNumber('id')
        ->name('admin.cars.edit');

    Route::put('/admin/mobil/{id}', [AdminCarController::class, 'update'])
        ->whereNumber('id')
        ->name('admin.cars.update');

    Route::delete('/admin/mobil/{id}', [AdminCarController::class, 'destroy'])
        ->whereNumber('id')
        ->name('admin.cars.destroy');
});

Route::get('/beli-mobil', [CarController::class, 'index'])
    ->name('beli-mobil');

Route::post('/booking-servis', [ServiceBookingController::class, 'store'])
    ->name('booking-servis.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');