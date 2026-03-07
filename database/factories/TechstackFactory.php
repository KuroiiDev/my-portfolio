<?php

// ─── TechstackFactory.php ────────────────────────────
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TechstackFactory extends Factory
{
    public function definition(): array
    {
        $stacks = [
            ['name' => 'Laravel', 'category' => 'Backend'],
            ['name' => 'PHP', 'category' => 'Backend'],
            ['name' => 'Node.js', 'category' => 'Backend'],
            ['name' => 'Vue.js', 'category' => 'Frontend'],
            ['name' => 'React', 'category' => 'Frontend'],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend'],
            ['name' => 'Alpine.js', 'category' => 'Frontend'],
            ['name' => 'MySQL', 'category' => 'Database'],
            ['name' => 'MongoDB', 'category' => 'Database'],
            ['name' => 'Docker', 'category' => 'Tools'],
            ['name' => 'Git', 'category' => 'Tools'],
            ['name' => 'Stripe', 'category' => 'Tools'],
            ['name' => 'WebSocket', 'category' => 'Tools'],
        ];

        $stack = $this->faker->randomElement($stacks);

        return [
            'name' => $stack['name'],
            'category' => $stack['category'],
            'icon' => null,
        ];
    }
}