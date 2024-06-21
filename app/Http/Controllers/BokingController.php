<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Models\Boking;


class BokingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $bookings = Boking::where('user_id', Auth::id())->get();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = Rooms::where('is_published', 1)->get();
        return view('bookings.create', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function AddBooking(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date|after:checkin_date',
            'adults' => 'required|integer|min:1',
            'children' => 'nullable|integer|min:0',
        ]);

        // Ambil data kamar berdasarkan ID
        $room = Rooms::findOrFail($request->room_id);

        // Hitung jumlah hari antara check-in dan check-out
        $checkin = Carbon::parse($request->checkin_date);
        $checkout = Carbon::parse($request->checkout_date);
        $days = $checkout->diffInDays($checkin);

        // Hitung total harga
        $total_price = $days * $room->price_per_night;

        // Buat booking baru
        $booking = Boking::create([
            'room_id' => $request->room_id,
            'user_id' => Auth::id(),
            'checkin_date' => $checkin,
            'checkout_date' => $checkout,
            'adults' => $request->adults,
            'children' => $request->children,
            'total_price' => $total_price,
        ]);

        // Redirect ke halaman bookings.index dengan pesan sukses
        return redirect()->route('bookings.index')
                        ->with('success', 'Booking created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('', compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rooms = Rooms::where('is_published', 1)->get();
        return view('bookings.edit', compact('booking', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Boking $booking)
    {
        $request->validate([
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date|after:checkin_date',
            'adults' => 'required|integer|min:1',
            'children' => 'nullable|integer|min:0',
        ]);

        $room = Rooms::findOrFail($booking->room_id);
        $days = $request->checkin_date->diffInDays($request->checkout_date);
        $total_price = $days * $room->price_per_night;

        $booking->update([
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
            'adults' => $request->adults,
            'children' => $request->children,
            'total_price' => $total_price,
        ]);

        return redirect()->route('bookings.index')
                        ->with('success','Booking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boking $booking)
    {
        $booking->delete();
        return view('', compact('booking'));
    }
}
