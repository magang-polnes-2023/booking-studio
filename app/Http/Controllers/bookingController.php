<?php

namespace App\Http\Controllers;

use App\Models\studio;
use App\Models\booking;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $studio = studio::find($id);

        $bookedTimes = booking::select('tanggal', 'start', 'finish')
            ->where('studio_id', $studio->id)
            ->whereNotIn('status',['selesai', 'Canceled'])
            ->get();
        return view ('booking.index', compact('studio', 'bookedTimes'));
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
        $this->validate($request, [
            'user_id' => 'required',
            'studio_id' => 'required',
            'no_telpon' => 'required',
            'tanggal' => 'required',
            'durasi' => 'required',
            'start' => 'required',
            'finish' => 'required',
            'total' => 'required',
        ]);

        booking::create([
            'user_id' => $request->user_id,
            'studio_id' => $request->studio_id,
            'no_telpon' => $request->no_telpon,
            'tanggal' => $request->tanggal,
            'durasi' => $request->durasi,
            'start' => $request->start,
            'finish' => $request->finish,
            'total' => $request->total,
        ]);

        $studio1 = studio::where('id', 1)->first();
        $studio2 = studio::where('id', 2)->first();
        $studio3 = studio::where('id', 3)->first();

        $booking = booking::all();
        $studio = studio::all();
        return redirect()->route('konfirmasi', compact('studio1', 'studio2', 'studio3', 'studio', 'booking'))->with(['success'=>'Data Berhasil Disimpan!']);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
    public function cancelOrder(string $id)
    {
        // Cari pesanan berdasarkan ID
        $booking = booking::findOrFail($id);

        // Periksa apakah pesanan belum dibayar
        if (!$booking->bayar) {
            // Lakukan proses pembatalan
            $booking->status = 'Canceled';
            $booking->save();

            // Berikan pesan sukses jika berhasil dibatalkan
            return redirect()->back()->with('success', 'Pesanan berhasil dibatalkan.');
        } else {
            // Berikan pesan error jika pesanan sudah dibayar
            return redirect()->back()->with('error', 'Pesanan sudah dibayar dan tidak dapat dibatalkan.');
        }
    }
}
