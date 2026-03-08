<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Backend
            ['name' => 'Laravel', 'category' => 'Backend', 'level' => 87],
            ['name' => 'PHP', 'category' => 'Backend', 'level' => 85],
            ['name' => 'REST API', 'category' => 'Backend', 'level' => 82],

            // Mobile
            ['name' => 'Flutter', 'category' => 'Mobile', 'level' => 36],
            ['name' => 'Dart', 'category' => 'Mobile', 'level' => 41],

            // Frontend
            ['name' => 'JavaScript', 'category' => 'Frontend', 'level' => 58],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend', 'level' => 73],
            ['name' => 'Bootstrap', 'category' => 'Frontend', 'level' => 77],
            ['name' => 'HTML', 'category' => 'Frontend', 'level' => 90],
            ['name' => 'CSS', 'category' => 'Frontend', 'level' => 75],

            // Database
            ['name' => 'MySQL', 'category' => 'Database', 'level' => 67],
            ['name' => 'PostgreSQL', 'category' => 'Database', 'level' => 50],
            ['name' => 'SQLite', 'category' => 'Database', 'level' => 55],

            // Tools
            ['name' => 'Git', 'category' => 'Tools', 'level' => 80],
            ['name' => 'Docker', 'category' => 'Tools', 'level' => 56],
            ['name' => 'Linux', 'category' => 'Tools', 'level' => 43],
        ];

        foreach ($skills as $skill) {
            Skill::create([...$skill, 'icon' => null]);
        }
    }
}
