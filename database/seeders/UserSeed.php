<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cate = [
            [
                'name' => 'galih',
                'email' => 'galih@gmail.com',
                'password' => 'password'
            ],
        ];
        foreach ($cate as $key => $p) {
            User::create([
                'name' => $p['name'],
                'email' => $p['email'],
                'password' => $p['password'],
            ]);
        }
    }
}
