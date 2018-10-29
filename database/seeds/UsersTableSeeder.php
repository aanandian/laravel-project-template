<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin     = Role::where('name', 'admin')->first();
        $role_customer  = Role::where('name', 'customer')->first();

        $admin              = new User();
        $admin->name        = 'Admin';
        $admin->username    = 'admin';
        $admin->email       = 'admin@example.com';
        $admin->password    = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $customer = new User();
        $customer->name     = 'Customer';
        $customer->username = 'customer';
        $customer->email    = 'customer@example.com';
        $customer->password = bcrypt('secret');
        $customer->save();
        $customer->roles()->attach($role_customer);
    }
}
