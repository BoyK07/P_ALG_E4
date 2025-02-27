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
            'username'          => 'BoyK07',
            'email'             => 'admin@sadcat.space',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
            'role'              => 'admin',
            'display_name'      => 'BoyK07',
            'bio'               => 'I am the admin of this site.',
            'avatar_url'        => null,
            'remember_token'    => null, // or you can leave this out
        ]);
    }
}
