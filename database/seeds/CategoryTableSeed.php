<?php

use Illuminate\Database\Seeder;

class CategoryTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $name = Str::random(10);
        DB::table('categories')->insert([
            'name' => "Iphone",
            'slug' => "iphone",
            'index' => 1,
        ]);
        DB::table('categories')->insert([
            'name' => "Samsung",
            'slug' => "samsung",
            'index' => 2,
        ]);
        DB::table('categories')->insert([
            'name' => "Oppo",
            'slug' => "oppo",
            'index' => 3,
        ]);
        DB::table('categories')->insert([
            'name' => "Vivo",
            'slug' => "vivo",
            'index' => 4,
        ]);
        DB::table('categories')->insert([
            'name' => "Xiaomi",
            'slug' => "xiaomi",
            'index' => 5,
        ]);
        DB::table('categories')->insert([
            'name' => "Phụ Kiện",
            'slug' => "phụ_kien",
            'index' => 99,
        ]);
    }
}
