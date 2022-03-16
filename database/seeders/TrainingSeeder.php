<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert([
            [
                'name' => 'Web dev',
                'description' => 'Become a true web dev.'
            ],
            [
                'name' => 'Marketing',
                'description' => 'Be a star inb marketing.'
            ],
            [
                'name' => 'Cooking',
                'description' => 'Open your own restaurant.'
            ],
            [
                'name' => 'Footballer',
                'description' => 'Training to be rich.'
            ],
            [
                'name' => 'Teacher',
                'description' => 'Teach everithing you know.'
            ],
            [
                'name' => 'Pilote',
                'description' => 'Go everywhere in a few minutes.'
            ],
        ]);
    }
}
