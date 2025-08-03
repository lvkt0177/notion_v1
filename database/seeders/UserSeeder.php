<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Lee',
            'last_name' => 'Thinh',
            'username' => 'lvkt0177',
            'email' => 'lvkt0177@gmail.com',
            'password' => Hash::make('Thinh3988@'),
        ]);
    }
}
