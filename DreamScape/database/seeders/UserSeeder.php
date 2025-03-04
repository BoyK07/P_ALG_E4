<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Make sure your User model exists

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username'          => 'ShadowSlayer',
            'email'             => 'shadow@example.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('Test123!'),
            'role'              => 'speler',
            'display_name'      => 'ShadowSlayer',
            'bio'               => null,
            'avatar_url'        => null,
            'remember_token'    => null,
        ]);

        User::create([
            'username'          => 'MysticMage',
            'email'             => 'mystic@example.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('Mage2024'),
            'role'              => 'speler',
            'display_name'      => 'MysticMage',
            'bio'               => null,
            'avatar_url'        => null,
            'remember_token'    => null,
        ]);

        User::create([
            'username'          => 'DragonKnight',
            'email'             => 'dragon@example.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('Dragon!99'),
            'role'              => 'speler',
            'display_name'      => 'DragonKnight',
            'bio'               => null,
            'avatar_url'        => null,
            'remember_token'    => null,
        ]);

        User::create([
            'username'          => 'AdminMaster',
            'email'             => 'admin@example.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('Admin007'),
            'role'              => 'beheerder',
            'display_name'      => 'AdminMaster',
            'bio'               => 'I am the admin of this site.',
            'avatar_url'        => null,
            'remember_token'    => null,
        ]);

        User::create([
            'username'          => 'ThunderRogue',
            'email'             => 'thunder@example.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('Thund3r!!'),
            'role'              => 'speler',
            'display_name'      => 'ThunderRogue',
            'bio'               => null,
            'avatar_url'        => null,
            'remember_token'    => null,
        ]);
    }
}
