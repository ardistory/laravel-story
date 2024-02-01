<?php

namespace Database\Seeders;

use App\Models\Documentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestDocumentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Documentation::query()->create([
            'title' => fake()->title(),
            'description' => fake()->text(100),
            'picture' => 'doc1.jpg',
            'post_by' => '2015171331'
        ]);
    }
}
