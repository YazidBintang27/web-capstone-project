<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Admin Configuration
    |--------------------------------------------------------------------------
    |
    |
    */

    'default_name' => env('ADMIN_NAME', 'Super Admin'),

    'default_username' => env('ADMIN_USERNAME', 'admin'),

    'default_phone' => env('ADMIN_PHONE', '08123456789'),

    'default_address' => env('ADMIN_ADDRESS', 'Admin Address'),

    'default_nik' => env('ADMIN_NIK', '1234567890123456'),

    'default_profile_picture' => env('ADMIN_PROFILE_PICTURE', 'images/default.jpg'),

    'default_password' => env('ADMIN_PASSWORD', 'password123'),

    'default_role' => env('ADMIN_ROLE', 'admin'),
];
