<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studioController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\konfirmasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/studio', [studioController::class, 'index'])->name('studio');

Route::get('/booking/{id}', [bookingController::class, 'index'])->name('booking');
Route::post('/booking/slot', [bookingController::class, 'store'])->name('slot');

Route::post('/konfirmasi/cancel/{id}', [bookingController::class, 'cancelOrder'])->name('konfirmasi.cancel');

Route::middleware('auth')->get('/konfirmasi', [konfirmasiController::class, 'index'])->name('konfirmasi');
Route::put('/konfirmasi/order/{id}', [konfirmasiController::class, 'update'])->name('order');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
