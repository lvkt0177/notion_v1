<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reminder;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Reminder::create([
            'task_id'   => 1,
            'remind_at' => now()->addDays(2)->setTime(8, 0),
            'is_sent'   => false,
        ]);
    }
}
