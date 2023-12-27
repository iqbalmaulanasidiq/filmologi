<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Contracts\Container\BindingResolutionException;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        [
        $UserData = 
        [
            'name'=>'User',
            'username' => 'bagas bagus banget',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => bcrypt('123456')
        ],

        [
            'name'=>'Admin',
            'username' => 'bpkadmin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123456')
        ],
        
        [
            'name'=>'Mba Frontend',
            'username' => 'frontend',
            'email' => 'frontend@gmail.com',
            'role' => 'frontend',
            'password' => bcrypt('123456')
        ],
        
        [
            'name'=>'Pusing',
            'username' => 'backend',
            'email' => 'backend@gmail.com',
            'role' => 'backend',
            'password' => bcrypt('123456')
        ],
        

        ];

        foreach($UserData as $key => $val) {
            User::create($val);
        }
    }
}
