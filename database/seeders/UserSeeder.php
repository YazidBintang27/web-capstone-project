<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'username' => 'admin',
            'phone_number' => '08123456789',
            'address' => 'Admin Address',
            'nik' => '1234567890123456',
            'profile_picture' => 'images/default.jpg',
            'password' => Hash::make('fufufafa'),
            'role' => 'admin',
        ]);
    }
}
