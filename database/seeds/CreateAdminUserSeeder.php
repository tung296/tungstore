<?php
  
use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Tung Pham', 
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('admin123'),
            'type'=>1
        ]);
  
        $role = Role::create(['name' => 'Admin']);
   
        $permissions = Permission::all();
  
        $role->syncPermissions($permissions);
   
        $user->assignRole($role);

        $user1 = User::create([
        	'name' => 'Tung Pham 1', 
        	'email' => 'tung@gmail.com',
        	'password' => bcrypt('admin123'),
            'type'=>2
        ]);
    }
}