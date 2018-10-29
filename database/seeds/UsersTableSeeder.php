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
        $role_admin = Role::where('name', 'admin')->first();
        $role_user  = Role::where('name', 'user')->first();

        $admin              = new User();
        $admin->name        = 'Admin';
        $admin->username    = 'admin';
        $admin->email       = 'admin@example.com';
        $admin->password    = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user               = new User();
        $user->name         = 'Customer';
        $user->username     = 'user';
        $user->email        = 'user@example.com';
        $user->password     = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
