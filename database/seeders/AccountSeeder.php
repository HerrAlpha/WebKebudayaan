<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate users table
        DB::table('users')->truncate();
        // Seed data for admin
        DB::table('users')->insert([
            'username' => 'admin1',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'email' => 'admin1@example.com',
            'email_verified_at' => Carbon::now(),
            'picture' => 'default.jpg',
            'remember_token' => 'token1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'username' => 'admin2',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'email' => 'admin2@example.com',
            'email_verified_at' => Carbon::now(),
            'picture' => 'default.jpg',
            'remember_token' => 'token2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Seed data for user
        DB::table('users')->insert([
            'username' => 'user1',
            'role' => 'user',
            'password' => Hash::make('password'),
            'email' => 'user1@example.com',
            'email_verified_at' => Carbon::now(),
            'picture' => 'default.jpg',
            'remember_token' => 'token3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'username' => 'user2',
            'role' => 'user',
            'password' => Hash::make('password'),
            'email' => 'user2@example.com',
            'email_verified_at' => Carbon::now(),
            'picture' => 'default.jpg',
            'remember_token' => 'token4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
