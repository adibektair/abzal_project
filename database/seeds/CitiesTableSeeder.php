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
            array('name' => 'Almaty', 'country_id' => 1),
            array('name' => 'Moscow', 'country_id' => 2),
            array('name' => 'Baku', 'country_id' => 3),
            array('name' => 'Milan', 'country_id' => 4),
            array('name' => 'Astana', 'country_id' => 5),
            array('name' => 'New-York', 'country_id' => 6),
            array('name' => 'New-Deli', 'country_id' => 7),

        );
        DB::table('cities')->insert($cities);
    }
}
