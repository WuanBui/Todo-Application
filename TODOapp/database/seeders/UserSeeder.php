<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public $users = [
        [
            'id' => 1,
            'name' => 'Quan',
            'email' => 'quan.bui21020005@vnuk.edu.vn',
            'password' => '17092002',
        ],
        [
            'id' => 2,
            'name' => 'B',
            'email' => '123@gmail.com',
            'password' => '123456',
        ],
    ];

    private function getUsers()
    {
        return $this->users;
    }

    public function run(): void
    {
        foreach ($this->getUsers() as $user) {
            User::create($user);
        }
    }
}
