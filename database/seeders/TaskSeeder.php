<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'task_list_id' => 1,
            'title'        => 'Học Laravel mỗi ngày',
            'description'  => 'Học ít nhất 30 phút mỗi ngày để nâng cao kỹ năng.',
            'is_done'      => false,
            'due_date'     => now()->addDays(3),
        ]);
    }
}
