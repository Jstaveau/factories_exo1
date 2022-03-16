<?php

namespace Database\Seeders;

use App\Http\Controllers\BuildingController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\This;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BuildingSeeder::class,
            TypeSeeder::class,
            TrainingSeeder::class
        ]);
    }
}
