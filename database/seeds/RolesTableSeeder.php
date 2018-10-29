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
        $admin                  = new Role();
        $admin->name            = 'admin';
        $admin->description     = 'A Admin User';
        $admin->save();

        $customer               = new Role();
        $customer->name         = 'customer';
        $customer->description  = 'A Customer User';
        $customer->save();
    }
}
