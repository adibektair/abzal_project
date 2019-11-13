<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = array(
            array('name' => 'Washington', 'country_id' => 1),
            array('name' => 'Toronto', 'country_id' => 2),
            array('name' => 'Sidney', 'country_id' => 3),
            array('name' => 'Vienna', 'country_id' => 4),
            array('name' => 'Minsk', 'country_id' => 5),
            array('name' => 'Brussel', 'country_id' => 6),
            array('name' => 'Beijing', 'country_id' => 7),
            array('name' => 'Praha', 'country_id' => 8),
            array('name' => 'Paris', 'country_id' => 9),
            array('name' => 'Berlin', 'country_id' => 10),
            array('name' => 'New-Deli', 'country_id' => 11),
            array('name' => 'Tokyo', 'country_id' => 12),
            array('name' => 'Nur-Sultan', 'country_id' => 13),
            array('name' => 'Seoul', 'country_id' => 14),
            array('name' => 'Bishkek', 'country_id' => 15),
            array('name' => 'Mexico city', 'country_id' => 16),
            array('name' => 'Moskow', 'country_id' => 17),
            array('name' => 'Ankara', 'country_id' => 18),
            array('name' => 'Kyiv', 'country_id' => 19),
            array('name' => 'London', 'country_id' => 20),
        );
        DB::table('cities')->insert($cities);
    }
}
