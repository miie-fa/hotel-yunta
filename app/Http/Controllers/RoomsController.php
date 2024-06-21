<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Rooms::all();
        return view('rooms.index', compact('rooms'));
    }
    public function search(Request $request)
    {
        $checkin = $request->input('checkin_date');
        $checkout = $request->input('checkout_date');
        $roomType = $request->input('room_type');
        $sortOrder = $request->input('sort', 'asc');

        $rooms = Rooms::where('is_published', 1)
            ->when($checkin, function($query) use ($checkin, $checkout) {
                return $query->whereDoesntHave('bookings', function($query) use ($checkin, $checkout) {
                    $query->whereBetween('checkin_date', [$checkin, $checkout])
                          ->orWhereBetween('checkout_date', [$checkin, $checkout])
                          ->orWhere(function($query) use ($checkin, $checkout) {
                              $query->where('checkin_date', '<=', $checkin)
                                    ->where('checkout_date', '>=', $checkout);
                          });
                });
            })
            ->when($roomType, function($query) use ($roomType) {
                return $query->where('room_type', $roomType);
            })
            ->orderBy('price_per_night', $sortOrder)
            ->get();

        $minValue = Rooms::where('is_published', 1)->min('price_per_night');
        $maxValue = Rooms::where('is_published', 1)->max('price_per_night');

        return view('rooms.index', compact('rooms', 'minValue', 'maxValue'));
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
    public function show(Rooms $rooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rooms $rooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rooms $rooms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rooms $rooms)
    {
        //
    }
}
