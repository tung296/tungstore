<?php

use Illuminate\Database\Seeder;

class BannerTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'name' => Str::random(10),
            'image' => "banner1.png",
            'link' => Str::random(10),
        ]);
        DB::table('banners')->insert([
            'name' => Str::random(10),
            'image' => "banner2.png",
            'link' => Str::random(10),
        ]);
        DB::table('banners')->insert([
            'name' => Str::random(10),
            'image' => "banner3.png",
            'link' => Str::random(10),
        ]);
    }
}
