<?php

namespace Database\Seeders;

use App\Domain\Users\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make(''),
                'email_verified_at' => now(),
            ]
        );

        User::query()->updateOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'name' => 'Super Admin User',
                'password' => Hash::make('admin'),
                'email_verified_at' => now(),
            ]
        );
    }
}
