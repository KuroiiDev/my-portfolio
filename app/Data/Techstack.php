<?php

namespace App\Data;

class Techstack
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'name' => 'Laravel', 'category' => 'Backend'],
            ['id' => 2, 'name' => 'PHP', 'category' => 'Backend'],
            ['id' => 3, 'name' => 'Flutter', 'category' => 'Mobile'],
            ['id' => 4, 'name' => 'Dart', 'category' => 'Mobile'],
            ['id' => 5, 'name' => 'JavaScript', 'category' => 'Frontend'],
            ['id' => 6, 'name' => 'CSS', 'category' => 'Frontend'],
            ['id' => 7, 'name' => 'HTML', 'category' => 'Frontend'],
            ['id' => 8, 'name' => 'Tailwind CSS', 'category' => 'Frontend'],
            ['id' => 9, 'name' => 'Bootstrap', 'category' => 'Frontend'],
            ['id' => 10, 'name' => 'Ajax', 'category' => 'Frontend'],
            ['id' => 11, 'name' => 'Vercel', 'category' => 'Tools'],
        ];
    }
    public static function find(int $id): ?array
    {
        return collect(self::all())->firstWhere('id', $id);
    }

    public static function findMany(array $ids): array
    {
        return collect(self::all())
            ->filter(fn($t) => in_array($t['id'], $ids))
            ->values()
            ->toArray();
    }

    public static function groupedByCategory(): array
    {
        return collect(self::all())
            ->groupBy('category')
            ->toArray();
    }
}