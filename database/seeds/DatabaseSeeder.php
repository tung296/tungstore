<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        $this->call(BannerTableSeed::class);
        $this->call(CategoryTableSeed::class);
        $this->call(ProductTableSeed::class);
        $this->call(OrderSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(OderDetailSeeder::class);
        
    }
}
