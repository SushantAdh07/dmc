<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //Admin
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => Hash::make('111'),
            
            'role' => 'admin',
            'status' => 'active',
        ]);

        DB::table('users')->insert([
            //Admin
            'name' => 'User',
            'username' => 'user',
            'email' => 'user123@gmail.com',
            'password' => Hash::make('111'),
            
            'role' => 'user',
            'status' => 'active',
        ]);

        
    }
}
