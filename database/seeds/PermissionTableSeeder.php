<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           'permission-list',
        //    'permission-create',
        //    'permission-edit',
        //    'permission-delete',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete',
           'banner-list',
           'banner-create',
           'banner-edit',
           'banner-delete',
           'category-list',
           'category-create',
           'category-edit',
           'category-delete',
           'order-list',
           'order-create',
           'order-edit',
           'order-delete',
           'file-list',
           'file-create',
           'file-delete',
        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
