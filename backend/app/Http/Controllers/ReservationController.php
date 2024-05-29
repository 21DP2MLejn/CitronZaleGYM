<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation; // Add the Reservation model import

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'session_id' => 'required|exists:sessions,id', // Assuming you have a 'sessions' table
        ]);

        $user = auth()->user();

        // Check if the user has reached the maximum reservation limit
        $userReservationCount = $user->reservations()->count();
        if ($userReservationCount >= 3) {
            return response()->json(['error' => 'Maximum reservation limit reached.'], 400);
        }

        // Create the reservation
        $reservation = new Reservation();
        $reservation->session_id = $request->session_id;
        $reservation->user_id = $user->id;
        $reservation->save();

        return response()->json(['message' => 'Reservation successful'], 200);
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);

        // Check if the reservation exists and if the user owns it
        if (!$reservation || $reservation->user_id !== auth()->user()->id) {
            return response()->json(['error' => 'Reservation not found or unauthorized'], 404);
        }

        // Delete the reservation
        $reservation->delete();

        return response()->json(['message' => 'Reservation canceled successfully'], 200);
    }
}