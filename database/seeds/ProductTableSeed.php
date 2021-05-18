<?php

use Illuminate\Database\Seeder;

class ProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = Str::random(10);
        DB::table('products')->insert([
            'name' => $name,
            'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name))),
            'import_price' => mt_rand(1000000,10000000),
            'price' => mt_rand(1000000,10000000),
            'amount' => mt_rand(1,10),
            'sold_amount' => mt_rand(1,10),
            'sku' => Str::random(10),
            'des' => Str::random(1000),
            'summary' => Str::random(100),
            'images' => Str::random(10).".jpg",
            'category_id' => 1,
        ]);
    }
}
