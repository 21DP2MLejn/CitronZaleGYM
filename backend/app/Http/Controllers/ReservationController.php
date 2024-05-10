<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'session' => 'required|string',
        ]);

        // Store the reservation in the database
        // Assuming you have a Reservation model and a reservations table
        $reservation = new \App\Models\Reservation();
        $reservation->session = $request->session;
        $reservation->save();

        return response()->json(['message' => 'Reservation successful'], 200);
    }
}