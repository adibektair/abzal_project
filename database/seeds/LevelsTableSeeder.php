<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'name' => 'базовый (могу общаться на общие темы)'
        ]);

        DB::table('levels')->insert([
            'name' => 'разговорный (свободное устное общение на любые темы)'
        ]);

        DB::table('levels')->insert([
            'name' => 'свободный(свободное письменное и устное общение)'
        ]);

        DB::table('levels')->insert([
            'name' => 'базовый(родной)'
        ]);
    }
}
