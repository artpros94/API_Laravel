<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 20; $i++){
            DB::table('tasks')->insert([
                'name'    => 'Task Name' . $i,
                'card_id' => rand(1, 20)
            ]);
        }
    }
}
