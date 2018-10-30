<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'              => 'Isian :attribute harus diterima',
    'active_url'            => 'Isian :attribute bukan URL yang valid.',
    'after'                 => 'Isian :attribute harus tanggal setelah :date.',
    'after_or_equal'        => 'Isian :attribute harus tanggal setelah atau sama dengan :date.',
    'alpha'                 => 'Isian :attribute hanya boleh berisi huruf.',
    'alpha_dash'            => 'Isian :attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num'             => 'Isian :attribute hanya boleh berisi huruf dan angka.',
    'array'                 => 'Isian :attribute harus berupa sebuah array.',
    'before'                => 'Isian :attribute harus tanggal sebelum :date.',
    'before_or_equal'       => 'Isian :attribute harus tanggal sebelum atau sama dengan :date.',
    'between'               => [
        'numeric'               => 'Isian :attribute harus antara :min dan :max.',
        'file'                  => 'Isian :attribute harus antara :min dan :max kilobyte.',
        'string'                => 'Isian :attribute harus antara :min dan :max karakter.',
        'array'                 => 'Isian :attribute harus antara :min dan :max item.',
    ],
    'boolean'               => 'Isian :attribute harus berupa true atau false.',
    'confirmed'             => 'Isian konfirmasi :attribute tidak cocok.',
    'date'                  => 'Isian :attribute bukan tanggal yang valid.',
    'date_format'           => 'Isian :attribute tidak cocok dengan format :format.',
    'different'             => 'Isian :attribute dan :other harus berbeda.',
    'digits'                => 'Isian :attribute harus berupa :digits angka.',
    'digits_between'        => 'Isian :attribute harus antara :min sampai :max angka.',
    'dimensions'            => 'Isian :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'              => 'Isian :attribute memiliki nilai yang duplikat.',
    'email'                 => 'Isian :attribute harus berupa alamat surel yang valid.',
    'exists'                => 'Isian :attribute yang dipilih tidak valid.',
    'file'                  => 'Isian :attribute harus berupa dokumen.',
    'filled'                => 'Isian :attribute harus memiliki nilai.',
    'gt'                    => [
        'numeric'               => 'Isian :attribute harus lebih dari :value.',
        'file'                  => 'Isian :attribute harus lebih dari :value kilobyte.',
        'string'                => 'Isian :attribute harus lebih dari :value karakter.',
        'array'                 => 'Isian :attribute harus memiliki lebih dari :value item.',
    ],
    'gte'                   => [
        'numeric'               => 'Isian :attribute harus lebih atau sama dengan :value.',
        'file'                  => 'Isian :attribute harus lebih atau sama dengan :value kilobyte.',
        'string'                => 'Isian :attribute harus lebih atau sama dengan :value karakter.',
        'array'                 => 'Isian :attribute harus memiliki :value item atau lebih.',
    ],
    'image'                 => 'Isian :attribute harus berupa gambar.',
    'in'                    => 'Isian :attribute yang dipilih tidak valid.',
    'in_array'              => 'Isian :attribute tidak terdapat dalam :other.',
    'integer'               => 'Isian :attribute harus merupakan bilangan bulat.',
    'ip'                    => 'Isian :attribute harus berupa alamat IP yang valid.',
    'ipv4'                  => 'Isian :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'                  => 'Isian :attribute harus berupa alamat IPv6 yang valid.',
    'json'                  => 'Isian :attribute harus berupa JSON string yang valid.',
    'lt'                    => [
        'numeric'               => 'Isian :attribute harus kurang dari :value.',
        'file'                  => 'Isian :attribute harus kurang dari :value kilobyte.',
        'string'                => 'Isian :attribute harus kurang dari :value karakter.',
        'array'                 => 'Isian :attribute harus memiliki kurang dari :value item.',
    ],
    'lte'                   => [
        'numeric'               => 'Isian :attribute harus kurang atau sama dengan :value.',
        'file'                  => 'Isian :attribute harus kurang atau sama dengan :value kilobyte.',
        'string'                => 'Isian :attribute harus kurang atau sama dengan :value karakater.',
        'array'                 => 'Isian :attribute harus tidak lebih dari :value item.',
    ],
    'max'                   => [
        'numeric'               => 'Isian :attribute harus tidak lebih dari :max.',
        'file'                  => 'Isian :attribute harus tidak lebih dari :max kilobyte.',
        'string'                => 'Isian :attribute harus tidak lebih dari :max karakter.',
        'array'                 => 'Isian :attribute harus tidak lebih dari :max item.',
    ],
    'mimes'                 => 'Isian :attribute harus dokumen berjenis : :values.',
    'mimetypes'             => 'Isian :attribute harus dokumen berjenis : :values.',
    'min'                   => [
        'numeric'               => 'Isian :attribute harus minimal :min.',
        'file'                  => 'Isian :attribute harus minimal :min kilobyte.',
        'string'                => 'Isian :attribute harus minimal :min karakter.',
        'array'                 => 'Isian :attribute harus minimal :min item.',
    ],
    'not_in'                => 'Isian :attribute yang dipilih tidak valid.',
    'not_regex'             => 'Format isian :attribute tidak valid.',
    'numeric'               => 'Isian :attribute harus berupa angka.',
    'present'               => 'Isian :attribute wajib ada.',
    'regex'                 => 'Format isian :attribute tidak valid.',
    'required'              => 'Isian :attribute wajib diisi.',
    'required_if'           => 'Isian :attribute wajib diisi bila :other adalah :value.',
    'required_unless'       => 'Isian :attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with'         => 'Isian :attribute wajib diisi bila terdapat :values.',
    'required_with_all'     => 'Isian :attribute wajib diisi bila terdapat :values.',
    'required_without'      => 'Isian :attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all'  => 'Isian :attribute wajib diisi bila tidak terdapat ada :values.',
    'same'                  => 'Isian :attribute dan :other harus sama.',
    'size'                  => [
        'numeric'               => 'Isian :attribute harus berukuran :size.',
        'file'                  => 'Isian :attribute harus berukuran :size kilobyte.',
        'string'                => 'Isian :attribute harus berukuran :size karakter.',
        'array'                 => 'Isian :attribute harus mengandung :size item.',
    ],
    'string'                => 'Isian :attribute harus berupa string.',
    'timezone'              => 'Isian :attribute harus berupa zona waktu yang valid.',
    'unique'                => 'Isian :attribute sudah ada sebelumnya.',
    'uploaded'              => 'Isian :attribute gagal diunggah.',
    'url'                   => 'Format isian :attribute tidak valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'id'                    => 'ID',
        'name'                  => 'Nama',
        'username'              => 'Nama Pengguna',
        'email'                 => 'Surel',
        'password'              => 'Sandi',
        'password_confirmation' => 'Konfirmasi Sandi',
        'remember_token'        => 'Token Pengingat',
        'created_at'            => 'Ditambah pada',
        'updated_at'            => 'Diperbarui pada',
        'deleted_at'            => 'Dihapus pada',

        'remember'              => 'Ingat Saya',
    ],

];
