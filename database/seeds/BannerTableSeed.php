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
            'image' => Str::random(10),
            'link' => Str::random(10).".jpg",
        ]);
    }
}
