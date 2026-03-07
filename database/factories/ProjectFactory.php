<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'experience_id' => null,
            'title' => $this->faker->randomElement([
                'E-Commerce Platform',
                'Task Management App',
                'Portfolio Website',
                'REST API Service',
                'Mobile App Backend',
                'Real-time Chat App',
                'Admin Dashboard',
                'Blog CMS',
            ]),
            'description' => $this->faker->paragraph(3),
            'image' => null,
            'github_url' => $this->faker->boolean(70) ? 'https://github.com/KuroiiDev/' . $this->faker->slug(2) : null,
            'live_url' => $this->faker->boolean(50) ? $this->faker->url() : null,
            'is_featured' => false,
        ];
    }

    public function featured(): static
    {
        return $this->state(['is_featured' => true]);
    }
}
