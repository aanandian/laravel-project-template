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
        $role_admin = Role::where('name', 'Admin')->first();
        $role_user  = Role::where('name', 'User')->first();

        // Via model
        User::updateOrCreate(
            [
                'username'  => 'admin',
                'email'     => 'admin@example.com',
            ],
            [
                'name'      => 'Administrator',
                // 'username'  => 'admin',
                // 'email'     => 'admin@example.com',
                'password'  => Hash::make('secret'),
            ]
        )->save();

        User::where([
            'username'  => 'admin',
            'email'     => 'admin@example.com',
        ])
        ->first()
        ->roles()->attach($role_admin);

        // Via CSV file
        $file   = fopen(database_path('seeds/' . get_class($this) . '.csv'), 'r');
        $header = true;

        while (($data = fgetcsv($file)) !== false) {
            if ($header == true) {
                $header = false;

                continue;
            }

            User::updateOrCreate(
                [
                    'username'  => $data[1],
                    'email'     => $data[2],
                ],
                [
                    'name'      => $data[0],
                    'username'  => $data[1],
                    'email'     => $data[2],
                    'password'  => $data[3],
                ]
            )->save();

            User::where([
                'username'  => $data[1],
                'email'     => $data[2],
            ])
            ->first()
            ->roles()->attach($role_user);
        }

        fclose($file);

        // Via factory
        factory(User::class, 25)->create()->each(function ($user) use ($role_user) {
            $user->roles()->attach($role_user);
        });
    }
}
