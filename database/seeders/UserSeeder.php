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
        $data = [
            [
                'name' => 'Ardiansyah Putra',
                'nik' => '2015171331',
                'password' => Hash::make('password'),
                'picture' => 'profile.jpg',
                'role_level' => 3
            ],
            [
                'name' => 'Aceng Abdul Fatah',
                'nik' => '2015208489',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => "Amar Ma'ruf N.M",
                'nik' => '2015404776',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Danu Raihan',
                'nik' => '2015446357',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Deni Setiawan',
                'nik' => '2013232591',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Fikri Abimanyu',
                'nik' => '2015446458',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Galih Patma',
                'nik' => '2015297986',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Irwana',
                'nik' => '2015331079',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Muhamad Rifki',
                'nik' => '2015457854',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Muhamad Subur Rizki',
                'nik' => '2015344149',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Ramin',
                'nik' => '2015383232',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Rifki Darmawan',
                'nik' => '2015398489',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Rofi Voliyantri',
                'nik' => '2013168060',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Rudi Setiawan',
                'nik' => '2015033228',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ],
            [
                'name' => 'Suriyansyah Albanzari',
                'nik' => '2015113583',
                'password' => Hash::make('password'),
                'picture' => 'default.png'
            ]
        ];

        foreach ($data as $dt) {
            User::query()->create($dt);
        }
    }
}
