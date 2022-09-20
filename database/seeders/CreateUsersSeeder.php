<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'role' => 1,
                'password' => bcrypt('Pa$$w0rd'),
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@example.com',
                'role' => 2,
                'password' => bcrypt('Pa$$w0rd'),
            ],
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'role' => 0,
                'password' => bcrypt('Pa$$w0rd'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
