<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file   = fopen(database_path('seeds/' . get_class($this) . '.csv'), 'r');
        $header = true;

        while (($data = fgetcsv($file)) !== false) {
            if ($header == true) {
                $header = false;

                continue;
            }

            App\Role::updateOrCreate(
                [
                    'name' => $data[0],
                ],
                [
                    'description' => $data[1],
                ]
            )->save();
        }

        fclose($file);
    }
}
