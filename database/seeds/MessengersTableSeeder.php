<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MessengersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messengers')->insert([
            'name' => 'WhatsApp'
        ]);

        DB::table('messengers')->insert([
            'name' => 'Viber'
        ]);

        DB::table('messengers')->insert([
            'name' => 'Telegram'
        ]);

        DB::table('messengers')->insert([
            'name' => 'WeChat'
        ]);

        DB::table('messengers')->insert([
            'name' => 'Snapchat'
        ]);
    }
}
