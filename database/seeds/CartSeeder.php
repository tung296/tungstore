<?php

use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            'user_id' => mt_rand(1,10),
            'product_id' => mt_rand(1,10),
            'qty' => mt_rand(1,10)
        ]);
    }
}
