<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $username = config('admin.default_username', 'admin');

        $existingAdmin = User::where('username', $username)->first();

        if (!$existingAdmin) {
            User::create([
                'name' => 'Super Admin',
                'username' => $username,
                'phone_number' => '08123456789',
                'address' => 'Admin Address',
                'nik' => '1234567890123456',
                'profile_picture' => 'images/default.jpg',
                'password' => Hash::make(config('admin.default_password', 'password123')),
                'role' => 'admin',
            ]);

            $this->command->info('Admin account created successfully!');
        } else {
            $this->command->warn('Admin account already exists. Seeder skipped.');
        }
    }
}
