<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    public function definition(): array
    {
        $isCurrently = $this->faker->boolean(30);

        return [
            'company' => $this->faker->company(),
            'role' => $this->faker->randomElement([
                'Backend Developer',
                'Frontend Developer',
                'Full Stack Developer',
                'Mobile Developer',
                'Software Engineer',
            ]),
            'type' => $this->faker->randomElement([
                'Full-time',
                'Internship',
                'Freelance',
                'Part-time'
            ]),
            'start_date' => $this->faker->dateTimeBetween('-3 years', '-6 months'),
            'end_date' => $isCurrently ? null : $this->faker->dateTimeBetween('-5 months', 'now'),
            'is_current' => $isCurrently,
            'description' => $this->faker->paragraph(2),
        ];
    }
}
