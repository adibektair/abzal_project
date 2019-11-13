<?php

use Illuminate\Database\Seeder;

class ExcursionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_infos')->insert([
            'name' => 'Written translation'
        ]);

        DB::table('extra_infos')->insert([
            'name' => 'Interpretation'
        ]);

        DB::table('extra_infos')->insert([
            'name' => 'Tourist services'
        ]);

    }
}
