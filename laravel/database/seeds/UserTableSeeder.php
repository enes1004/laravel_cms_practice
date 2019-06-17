<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*
      $role_customer = Role::where('name', 'customer')->first();
      $role_admin  = Role::where('name', 'admin')->first();
      $customer = new User();
      $customer->name = 'Customer Name';
      $customer->email = 'customer@example.com';
      $customer->password = bcrypt('secret');
      $customer->save();
      $customer->roles()->attach($role_customer);
      $admin = new User();
      $admin->name = 'Admin Name';
      $admin->email = 'admin@example.com';
      $admin->password = bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);
*/
    }
}
