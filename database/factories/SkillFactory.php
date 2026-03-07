<?php

// ─── SkillFactory.php ────────────────────────────────
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    public function definition(): array
    {
        $skills = [
            ['name' => 'Laravel', 'category' => 'Backend'],
            ['name' => 'PHP', 'category' => 'Backend'],
            ['name' => 'Node.js', 'category' => 'Backend'],
            ['name' => 'Vue.js', 'category' => 'Frontend'],
            ['name' => 'React', 'category' => 'Frontend'],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend'],
            ['name' => 'Alpine.js', 'category' => 'Frontend'],
            ['name' => 'MySQL', 'category' => 'Database'],
            ['name' => 'PostgreSQL', 'category' => 'Database'],
            ['name' => 'MongoDB', 'category' => 'Database'],
            ['name' => 'Docker', 'category' => 'Tools'],
            ['name' => 'Git', 'category' => 'Tools'],
            ['name' => 'Linux', 'category' => 'Tools'],
        ];

        $skill = $this->faker->randomElement($skills);

        return [
            'name' => $skill['name'],
            'category' => $skill['category'],
            'icon' => null,
            'level' => $this->faker->numberBetween(60, 95),
        ];
    }
}