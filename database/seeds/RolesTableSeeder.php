<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin              = new Role();
        $admin->name        = 'Admin';
        $admin->description = 'A admin user';
        $admin->save();

        $user               = new Role();
        $user->name         = 'user';
        $user->description  = 'A regular user';
        $user->save();
    }
}
