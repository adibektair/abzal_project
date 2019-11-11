<?php

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
         $this->call([
             GendersTableSeeder::class,
             CountriesTableSeeder::class,
             MessengersTableSeeder::class,
             LevelsTableSeeder::class,
             ValuesTableSeeder::class,
             LanguagesTableSeeder::class,
             CitiesTableSeeder::class,
             ]);
    }
}
