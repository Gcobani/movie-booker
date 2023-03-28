<?php

namespace Database\Seeders;

use App\Models\CinemaLocation;
use App\Models\Film;
use App\Models\Theatre;
use App\Models\User;
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
         User::factory()->create(['name' => 'Jane', 'email' => 'jane@movieapp.com']);
         User::factory()->create(['name' => 'John', 'email' => 'john@movieapp.com']);

         CinemaLocation::factory()->count(2)
             ->has(
                 Theatre::factory()->count(2)
                     ->has(
                         Film::factory()->count(2), 'films'
                     ), 'theatres'
             )->create();
    }
}
