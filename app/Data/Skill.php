<?php

namespace App\Data;

class Skill
{
    public static function all(): array
    {
        return [
            // Backend
            ['id' => 1, 'name' => 'Laravel', 'category' => 'Backend', 'level' => 85, 'icon' => null],
            ['id' => 2, 'name' => 'PHP', 'category' => 'Backend', 'level' => 85, 'icon' => null],
            ['id' => 3, 'name' => 'REST API', 'category' => 'Backend', 'level' => 80, 'icon' => null],

            // Mobile
            ['id' => 4, 'name' => 'Flutter', 'category' => 'Mobile', 'level' => 36, 'icon' => null],
            ['id' => 5, 'name' => 'Dart', 'category' => 'Mobile', 'level' => 41, 'icon' => null],

            // Frontend
            ['id' => 6, 'name' => 'JavaScript', 'category' => 'Frontend', 'level' => 58, 'icon' => null],
            ['id' => 7, 'name' => 'Tailwind CSS', 'category' => 'Frontend', 'level' => 73, 'icon' => null],
            ['id' => 8, 'name' => 'Bootstrap', 'category' => 'Frontend', 'level' => 77, 'icon' => null],
            ['id' => 9, 'name' => 'HTML', 'category' => 'Frontend', 'level' => 90, 'icon' => null],
            ['id' => 10, 'name' => 'CSS', 'category' => 'Frontend', 'level' => 75, 'icon' => null],

            // Database
            ['id' => 11, 'name' => 'MySQL', 'category' => 'Database', 'level' => 78, 'icon' => null],
            ['id' => 12, 'name' => 'PostgreSQL', 'category' => 'Database', 'level' => 50, 'icon' => null],
            ['id' => 13, 'name' => 'SQLite', 'category' => 'Database', 'level' => 55, 'icon' => null],

            // Tools
            ['id' => 14, 'name' => 'Git', 'category' => 'Tools', 'level' => 80, 'icon' => null],
            ['id' => 15, 'name' => 'Docker', 'category' => 'Tools', 'level' => 56, 'icon' => null],
            ['id' => 16, 'name' => 'Linux', 'category' => 'Tools', 'level' => 43, 'icon' => null],
        ];
    }

    public static function find(int $id): ?array
    {
        return collect(self::all())->firstWhere('id', $id);
    }

    public static function groupedByCategory(): array
    {
        return collect(self::all())
            ->groupBy('category')
            ->toArray();
    }
}