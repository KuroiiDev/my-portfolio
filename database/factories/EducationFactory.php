<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'school' => $this->faker->randomElement([
                'Universitas Diponegoro',
                'Institut Teknologi Bandung',
                'Universitas Indonesia',
                'Universitas Gadjah Mada',
            ]),
            'major' => $this->faker->randomElement([
                'Teknik Informatika',
                'Ilmu Komputer',
                'Sistem Informasi',
                'Teknik Elektro',
            ]),
            'degree' => $this->faker->randomElement(['S1', 'D3', 'D4']),
            'start_year' => 2020,
            'end_year' => null,
            'description' => $this->faker->sentence(12),
        ];
    }
}
