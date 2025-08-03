<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // You can call other seeders here
        $this->call([
            UserSeeder::class,
            TaskListSeeder::class,
            TaskSeeder::class,
            TagSeeder::class,
            TaskTagSeeder::class,
            ReminderSeeder::class,
        ]);
    }
}
