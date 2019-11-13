<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = array(
        array('name' => 'Azerbaijani'),
        array('name' => 'English'),
        array('name' => 'Arab'),
        array('name' => 'Armenian'),
        array('name' => 'Belorussian'),
        array('name' => 'Bulgarian'),
        array('name' => 'Hungarian'),
        array('name' => 'Dutch'),
        array('name' => 'Greek'),
        array('name' => 'Georgian'),
        array('name' => 'Hebrew'),
        array('name' => 'Indonesian'),
        array('name' => 'Irish'),
        array('name' => 'Spanish'),
        array('name' => 'Italian'),
        array('name' => 'Kazakh'),
        array('name' => 'Chinese'),
        array('name' => 'Korean'),
        array('name' => 'Latvian'),
        array('name' => 'Mongolian'),
        array('name' => 'Deutsch'),
        array('name' => 'Norwegian'),
        array('name' => 'Persian'),
        array('name' => 'Polish')
        );
        DB::table('languages')->insert($languages);
    }
}
