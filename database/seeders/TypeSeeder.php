<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'name' => 'Web dev 1',
            ],
            [
                'name' => 'Marketing 2',
            ],
            [
                'name' => 'Cooking 3',
            ],
            [
                'name' => 'Footballer 4',
            ],
            [
                'name' => 'Teacher 5',
            ],
            [
                'name' => 'Pilote 6',
            ],
            [
                'name' => 'Pilote 7',
            ],
            [
                'name' => 'Pilote 8',
            ],
            [
                'name' => 'Pilote 9',
            ],
            [
                'name' => 'Pilote 10',
            ],
        ]);
    }
}
