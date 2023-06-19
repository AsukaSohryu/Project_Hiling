<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([

            'item_name' => 'Tiket Tiga Kali Main',
            'harga' => '120.000',
            'created_at' => Carbon::now(),
        ]);

        DB::table('items')->insert([

            'item_name' => 'Tiket Gravity Luge',
            'harga' => '50.000',
            'created_at' => Carbon::now(),
        ]);
    }
}
