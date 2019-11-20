<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('values')->insert([
            'name' => 'USD'
        ]);

        DB::table('values')->insert([
            'name' => 'EUR'
        ]);

        DB::table('values')->insert([
            'name' => 'RUB'
        ]);
    }
}
