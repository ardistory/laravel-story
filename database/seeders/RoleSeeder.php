<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Super Admin',
                'level' => 3
            ],
            [
                'name' => 'Admin',
                'level' => 2
            ],
            [
                'name' => 'Member',
                'level' => 1
            ]
        ];

        foreach ($data as $dt) {
            Role::query()->create($dt);
        }
    }
}
