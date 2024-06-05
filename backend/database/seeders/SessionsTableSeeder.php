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
            ['name' => 'POWER LIFTING', 'day' => 'Monday', 'time' => '13:00'],
            ['name' => 'ZUMBA', 'day' => 'Wednesday', 'time' => '13:00'],
            ['name' => 'PILATES', 'day' => 'Friday', 'time' => '13:00'],
            ['name' => 'YOGA', 'day' => 'Tuesday', 'time' => '14:00'],
            ['name' => 'POWER LIFTING', 'day' => 'Thursday', 'time' => '14:00'],
            ['name' => 'PILATES', 'day' => 'Monday', 'time' => '15:00'],
            ['name' => 'KICKBOXING', 'day' => 'Thursday', 'time' => '15:00'],
            ['name' => 'INDOOR CYCLING', 'day' => 'Tuesday', 'time' => '16:00'],
            ['name' => 'STRETCH & BALANCE', 'day' => 'Thursday', 'time' => '16:00'],
            ['name' => 'CIRCUIT TRAINING', 'day' => 'Friday', 'time' => '16:00'],
            ['name' => 'POWER LIFTING', 'day' => 'Monday', 'time' => '17:00'],
            ['name' => 'ZUMBA', 'day' => 'Wednesday', 'time' => '17:00'],
            ['name' => 'PILATES', 'day' => 'Friday', 'time' => '17:00'],
            ['name' => 'YOGA', 'day' => 'Tuesday', 'time' => '18:00'],
            ['name' => 'POWER LIFTING', 'day' => 'Thursday', 'time' => '18:00'],
            ['name' => 'CORE TRAINING', 'day' => 'Monday', 'time' => '19:00'],
            ['name' => 'FULL BODY CIRCLES', 'day' => 'Tuesday', 'time' => '19:00'],
            ['name' => 'YOGA', 'day' => 'Friday', 'time' => '19:00'],
            ['name' => 'PILATES', 'day' => 'Monday', 'time' => '20:00'],
            ['name' => 'KICKBOXING', 'day' => 'Wednesday', 'time' => '20:00'],
        ];

        foreach ($sessions as $session) {
            Session::create($session);
        }
    }
}
