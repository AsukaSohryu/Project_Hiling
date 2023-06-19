<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Samuel',
            'email' => 'aaaa@gmail.com',
            'phone' => '08696969669',
            'password' => Hash::make('YunYun'),
            'created_at' => Carbon::now(),
        ]);
    }
}