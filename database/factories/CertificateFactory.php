<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certificate>
 */
class CertificateFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement([
                'AWS Certified Developer',
                'Google Cloud Associate',
                'Laravel Certified Developer',
                'Meta Frontend Developer',
                'Dicoding Backend Developer',
            ]),
            'issuer' => $this->faker->randomElement([
                'Amazon Web Services',
                'Google',
                'Laravel LLC',
                'Meta',
                'Dicoding',
            ]),
            'issued_date' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'expiry_date' => $this->faker->boolean(50)
                ? $this->faker->dateTimeBetween('now', '+2 years')
                : null,
            'credential_url' => $this->faker->url(),
            'image' => null,
        ];
    }
}