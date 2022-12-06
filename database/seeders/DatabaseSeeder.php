<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use \App\Models\User;
use App\Models\Photo;
use \App\Models\History;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegionSeeder::class);
        City::factory(100)->create();
        User::factory(10)->create();
        History::factory(200)->create();
        Photo::factory(50)->create();
    }
}