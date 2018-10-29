<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Models Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for displaying model attribute
    | labels that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    '_id'           => 'ID',
    '_created_at'   => 'Ditambah pada',
    '_updated_at'   => 'Diperbarui pada',
    '_deleted_at'   => 'Dihapus pada',
    '_search'       => 'Pencarian',

    'user'          => [
        'id'                    => 'ID',
        'name'                  => 'Nama Lengkap',
        'username'              => 'Nama Pengguna',
        'email'                 => 'Surel',
        'password'              => 'Sandi',
        'password_confirmation' => 'Konfirmasi Sandi',
        'remember_token'        => 'Token Pengingat',
        'created_at'            => 'Terdaftar pada',
        'updated_at'            => 'Diperbarui pada',

        'remember'              => 'Ingat Saya',
    ],

    'role'          => [
        'id'            => 'ID',
        'name'          => 'Peran',
        'description'   => 'Deskripsi',
        'created_at'    => 'Dibuat pada',
        'updated_at'    => 'Diperbarui pada',
    ],

];
