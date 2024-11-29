<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$30,000 USD', '$40,000 USD', '$50,000 USD', '$60,000 USD']),
            'location' => fake()->city,
            'url' => fake()->url,
            'schedule' => fake()->randomElement(['Full Time', '3 Days per Week', '4 Days per Week']),
            'featured' => fake()->boolean
        ];
    }
}
