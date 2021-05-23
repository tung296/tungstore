<?php

use Illuminate\Database\Seeder;

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
            'user_id' => mt_rand(1,10),
            'total_money' => mt_rand(100000,10000000),
            'payment' => mt_rand(1,2),
            'status' => mt_rand(1,3),
            'name' => mt_rand(1,3),
            'phone' => mt_rand(1,3),
            'adress' => Str::random(100),
            'note' => Str::random(100),
        ]);
    }
}
