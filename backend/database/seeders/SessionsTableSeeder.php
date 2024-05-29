<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Session;

class SessionsTableSeeder extends Seeder
{
    public function run()
    {
        $sessions = [
            ['name' => 'INDOOR CYCLING', 'day' => 'Tuesday', 'time' => '12:00'],
            ['name' => 'STRETCH & BALANCE', 'day' => 'Thursday', 'time' => '12:00'],
            ['name' => 'CIRCUIT TRAINING', 'day' => 'Friday', 'time' => '12:00'],
            // Add more sessions as needed
        ];

        foreach ($sessions as $session) {
            Session::create($session);
        }
    }
}
