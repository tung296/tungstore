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
        $name = Str::random(10);
        DB::table('categories')->insert([
            'name' => $name,
            'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name))),
            'index' => mt_rand(1,10),
        ]);
    }
}
