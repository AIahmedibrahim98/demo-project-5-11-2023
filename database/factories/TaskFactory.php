<?php

namespace Database\Factories;

use App\Models\TaskType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $task_type_ids = TaskType::pluck('id')->toArray();
        return [
            'title' => $this->faker->sentence(1),
            'description' => $this->faker->sentence(15),
            'due_date' => $this->faker->dateTimeBetween('+0 days', '+2 years')->format('Y-m-d'),
            'task_type_id' => $this->faker->randomElement($task_type_ids),
            'assign_to' => User::inRandomOrder()->first()->id
        ];
    }
}
