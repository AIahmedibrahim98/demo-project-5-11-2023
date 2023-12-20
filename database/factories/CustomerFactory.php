<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'mobile' => $this->faker->phoneNumber(),
            'address' => $this->faker->streetAddress(),
            'job_title' => $this->faker->jobTitle(),
            'brith_date' => $this->faker->date(),
            'country' => $this->faker->country(),
            'state' => $this->faker->streetName(),
            'email' => $this->faker->safeEmail(),
            'company' => $this->faker->company(),
            'interests' => fake()->sentence(15),
            'gender' => $this->faker->randomElement(['male', 'female']),
        ];
    }
}
