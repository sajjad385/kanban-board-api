<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'title' => 'Task 1',
                'status' => 'to_do',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Task 2',
                'status' => 'to_do',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Task 3',
                'status' => 'progress',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Task 4',
                'status' => 'done',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Task 5',
                'status' => 'to_do',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        Task::query()->insert($tasks);
    }
}
