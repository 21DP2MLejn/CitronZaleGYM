<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Session;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'session_id' => 'required|exists:sessions,id',
        ]);

        $user = auth()->user();

        $userReservationCount = $user->reservations()->count();
        if ($userReservationCount >= 3) {
            return response()->json(['error' => 'Maximum reservation limit reached.'], 400);
        }

        $session = Session::find($request->session_id);

        if ($session->reserved >= 20) {
            return response()->json(['error' => 'No available spots left.'], 400);
        }

        $reservation = new Reservation();
        $reservation->session_id = $request->session_id;
        $reservation->user_id = $user->id;
        $reservation->save();

        $session->increment('reserved');

        return response()->json(['message' => 'Reservation successful'], 200);
    }

    public function destroy($id)
    {
        $reservation = Reservation::where('session_id', $id)
                                  ->where('user_id', auth()->user()->id)
                                  ->first();

        if (!$reservation) {
            return response()->json(['error' => 'Reservation not found or unauthorized'], 404);
        }

        $reservation->delete();

        $session = Session::find($id);
        $session->decrement('reserved');

        return response()->json(['message' => 'Reservation canceled successfully'], 200);
    }
}