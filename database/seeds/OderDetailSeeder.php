<?php

use Illuminate\Database\Seeder;

class OderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oder_details')->insert([
            'order_id' => mt_rand(1,10),
            'product_id' => mt_rand(1,10),
            'qty' => mt_rand(1,2),
        ]);
    }
}
