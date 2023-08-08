<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
// use Carbon\Carbon;

class konfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $user = Auth::user();

       $booking = Booking::with('user', 'studio')
        ->where('user_id', $user->id)
        ->latest()
        ->paginate(5);

        // $now = Carbon::now(); // Mendapatkan waktu sekarang

        // foreach ($booking as $bookingItem) {
        //     $startTime = Carbon::parse($bookingItem->start); // Konversi waktu mulai ke objek Carbon
        //     $endTime = Carbon::parse($bookingItem->finish); // Konversi waktu selesai ke objek Carbon

        //     // Periksa kondisi waktu untuk setiap booking
        //     if ($now >= $startTime && $now < $endTime) {
        //         $bookingItem->status = 'Digunakan';
        //     } else if ($now >= $endTime) {
        //         $bookingItem->status = 'Selesai';
        //     } else {
        //         // Jika waktu sekarang sebelum waktu mulai, status tetap sama atau tidak perlu diubah
        //         // Tambahkan logika lain jika diperlukan
        //     }
        // }

        return view('konfirmasi.index', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'bukti_pembayaran' => 'required|image',
        ]);

        $booking = booking::findOrFail($id);

        $bukti = $request->file('bukti_pembayaran');
        $bukti->storeAs('public/', $bukti->hashName());

        Storage::delete('public/' . $booking->bukti);

        $booking->update([
            'bukti_pembayaran' => $bukti->hashName(),
            'status' => 'Waiting',
        ]);

        return redirect()->route('konfirmasi')->with(['success' => 'Data Booking Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
