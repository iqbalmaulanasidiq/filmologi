<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        [
        $UserData = 
        [
            'name'=>'User',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => bcrypt('123456')
        ],

        [
            'name'=>'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123456')
        ],
        
        [
            'name'=>'Mba Frontend',
            'email' => 'frontend@gmail.com',
            'role' => 'frontend',
            'password' => bcrypt('123456')
        ],
        
        [
            'name'=>'Pusing',
            'email' => 'backend@gmail.com',
            'role' => 'backend',
            'password' => bcrypt('123456')
        ],
        

        ];
    }
}
