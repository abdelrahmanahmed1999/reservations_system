<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Abdelrahman ahmed',
                'email' => 'Abdelrahman@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'role' => 'superAdmin',
            ],
            
        ]);
    }
}
