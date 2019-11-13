<?php

use Illuminate\Database\Seeder;

class ExtraInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_infos')->insert([
            'name' => 'I have a interpreter diploma'
        ]);
        DB::table('extra_infos')->insert([
            'name' => 'I have a guide license'
        ]);

        DB::table('extra_infos')->insert([
            'name' => 'I have a car'
        ]);



    }
}
