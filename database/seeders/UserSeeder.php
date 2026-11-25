<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['username' => 'Александр', 'surname' => 'Михайлов', 'patronymic' => '', 'email' => 'mihailov@example.com'],
            ['username' => 'Ярослав', 'surname' => 'Николенко', 'patronymic' => 'Евгеньевич', 'email' => 'yarik228@example.com'],
            ['username' => 'Иван', 'surname' => 'Иванов', 'patronymic' => 'Иванович', 'email' => 'ivan@example.com'],
        ];
        foreach ($users as $user) {
            User::create([
                'username' => $user['username'],
                'surname' => $user['surname'],
                'patronymic' => $user['patronymic'],
                'email' => $user['email'],
                'password' => Hash::make('password'),
            ]);
        }
    }
}
