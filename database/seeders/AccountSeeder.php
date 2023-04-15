<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Models\User;

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
        $user = [[
            'username' => 'admin1',
            'role' => 'admin',
            'password' => bcrypt(123456),
            'email' => 'admin1@example.com',
            'email_verified_at' => Carbon::now(),
            'remember_token' => 'token1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'username' => 'admin2',
            'role' => 'admin',
            'password' => bcrypt(123456),
            'email' => 'admin2@example.com',
            'email_verified_at' => Carbon::now(),
            'remember_token' => 'token2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],         // Seed data for user
        [
            'username' => 'user1',
            'role' => 'user',
            'password' => bcrypt(123456),
            'email' => 'user1@example.com',
            'email_verified_at' => Carbon::now(),
            'remember_token' => 'token3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'username' => 'user2',
            'role' => 'user',
            'password' => bcrypt(123456),
            'email' => 'user2@example.com',
            'email_verified_at' => Carbon::now(),
            'remember_token' => 'token4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
