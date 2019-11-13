<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            array('name' => 'United States'),
            array('name' => 'Canada'),
            array('name' => 'Australia'),
            array('name' => 'Austria'),
            array('name' => 'Belarus'),
            array('name' => 'Belgium'),
            array('name' => 'China'),
            array('name' => 'Czech Republic'),
            array('name' => 'France'),
            array('name' => 'Germany'),
            array('name' => 'India'),
            array('name' => 'Japan'),
            array('name' => 'Kazakhstan'),
            array('name' => 'Korea, Democratic People\'s Republic of'),
            array('name' => 'Kyrgyzstan'),
            array('name' => 'Mexico'),
            array('name' => 'Russia'),
            array('name' => 'Turkey'),
            array('name' => 'Ukraine'),
            array('name' => 'United Kingdom'),

        );
        DB::table('countries')->insert($countries);
    }
}
