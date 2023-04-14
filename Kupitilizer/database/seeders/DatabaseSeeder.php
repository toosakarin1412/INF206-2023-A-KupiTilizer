<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('adminadmin'),
            'role' => 'admin',
        ]);
        
        User::create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('useruser'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'manager',
            'email' => 'manager@example.com',
            'password' => bcrypt('managermanager'),
            'role' => 'manager',
        ]);

        
    
    }
}
