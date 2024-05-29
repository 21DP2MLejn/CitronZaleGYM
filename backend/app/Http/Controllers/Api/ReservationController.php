<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Session;

class ReservationController extends \App\Http\Controllers\Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'session_id' => 'required|exists:sessions,id',
        ], [
            'session_id.exists' => 'The selected session does not exist.',
        ]);
    
        $user = auth()->user();
    
        $userReservationCount = $user->reservations()->count();
        if ($userReservationCount >= 3) {
            return response()->json(['error' => 'Maximum reservation limit reached.'], 422);
        }
    
        $session = Session::find($request->session_id);
    
        if ($session->reserved >= 20) {
            return response()->json(['error' => 'No available spots left.'], 422);
        }
    
        $reservation = new Reservation();
        $reservation->session_id = $request->session_id;
        $reservation->user_id = $user->id;
        $reservation->save();
    
        $session->increment('reserved');
    
        return response()->json(['message' => 'Reservation successful'], 200);
    }
    
}