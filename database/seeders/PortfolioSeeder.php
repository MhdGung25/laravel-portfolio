<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('portfolios')->insert([
            [
                'title' => 'Project One',
                'slug' => 'project-one',
                'description' => 'A short description for Project One. Built with Laravel and TailwindCSS.',
                'image' => null,
                'url' => 'https://example.com/project-one',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Project Two',
                'slug' => 'project-two',
                'description' => 'Project Two showcases an API integration and automated tests.',
                'image' => null,
                'url' => 'https://example.com/project-two',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Personal Blog',
                'slug' => 'personal-blog',
                'description' => 'A small blog built to document learning notes and tutorials.',
                'image' => null,
                'url' => 'https://example.com/blog',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
