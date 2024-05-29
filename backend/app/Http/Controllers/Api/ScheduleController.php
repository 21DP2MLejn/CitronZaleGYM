<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Session;

class ScheduleController extends Controller
{
    public function index()
    {
        $sessions = Session::all();

        // Create a schedule array indexed by time and day
        $schedule = [
            '12:00' => ['Monday' => null, 'Tuesday' => null, 'Wednesday' => null, 'Thursday' => null, 'Friday' => null],
            '13:00' => ['Monday' => null, 'Tuesday' => null, 'Wednesday' => null, 'Thursday' => null, 'Friday' => null],
            // Add more time slots as needed
        ];

        foreach ($sessions as $session) {
            $schedule[$session->time][$session->day] = [
                'id' => $session->id,
                'name' => $session->name,
                'reserved' => $session->reserved,
            ];
        }

        return response()->json($schedule);
    }
}
