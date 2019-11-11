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
        array('name' => 'Azerbaijani', 'level_id' => 1),
        array('name' => 'English', 'level_id' => 2),
        array('name' => 'Arab', 'level_id' => 3),
        array('name' => 'Armenian', 'level_id' => 4),
        array('name' => 'Belorussian', 'level_id' => 5),
        array('name' => 'Bulgarian', 'level_id' => 6),
        array('name' => 'Hungarian', 'level_id' => 7),
        array('name' => 'Dutch', 'level_id' => 8),
        array('name' => 'Greek', 'level_id' => 9),
        array('name' => 'Georgian', 'level_id' => 10),
        array('name' => 'Hebrew', 'level_id' => 11),
        array('name' => 'Indonesian', 'level_id' => 12),
        array('name' => 'Irish', 'level_id' => 13),
        array('name' => 'Spanish', 'level_id' => 14),
        array('name' => 'Italian', 'level_id' => 15),
        array('name' => 'Kazakh', 'level_id' => 16),
        array('name' => 'Chinese', 'level_id' => 17),
        array('name' => 'Korean', 'level_id' => 18),
        array('name' => 'Latvian', 'level_id' => 19),
        array('name' => 'Mongolian', 'level_id' => 20),
        array('name' => 'Deutsch', 'level_id' => 21),
        array('name' => 'Norwegian', 'level_id' => 22),
        array('name' => 'Persian', 'level_id' => 23),
        array('name' => 'Polish', 'level_id' => 24)
        );
        DB::table('languages')->insert($languages);
    }
}
