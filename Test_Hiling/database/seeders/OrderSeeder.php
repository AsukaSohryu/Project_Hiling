<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([

            'user_id' => 1,
            'item_id' => 1,
            'Order_Name' => 'Tiket Tiga Kali Main',
            'Quantity' => 2,
            'price' => '249.600,00',
            'Order_Date' => "2023-05-22",
            'Status' => "On-Going",
            "created_at" => Carbon::now(),
        ]);

        DB::table('orders')->insert([

            'user_id' => 1,
            'item_id' => 2,
            'Order_Name' => 'Tiket Gravity Luge',
            'Quantity' => 4,
            'price' => '204.600,00',
            'Order_Date' => "2022-12-03",
            'Status' => "Completed",
            "created_at" => Carbon::now()
        ]);
    }
}
