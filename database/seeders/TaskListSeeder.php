<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TaskList;
use Illuminate\Database\Seeder;

class TaskListSeeder extends Seeder
{
    public function run(): void
    {
        TaskList::create([
            'name' => 'Công việc cá nhân',
            'description' => 'Những việc mình cần làm mỗi ngày.',
        ]);
    }
}
