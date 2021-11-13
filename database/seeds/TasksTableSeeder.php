<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            Task::create([
                'user_id' => '1',
                'title' => Str::random(10),
                'description' => Str::random(30),
                'registration_date' => '2021-12-1',
                'expiration_date' => '2021-12-31',
            ]);
        }
    }
}
