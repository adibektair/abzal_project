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
        DB::table('services')->insert([
            'name' => 'Written translation'
        ]);

        DB::table('services')->insert([
            'name' => 'Interpretation'
        ]);

        DB::table('services')->insert([
            'name' => 'Tourist services'
        ]);

    }
}
