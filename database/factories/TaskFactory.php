<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            "name"=> fake()->sentence(),
            "description" => fake()->realText(),
            "due_date"=> fake()->dateTimeBetween('now','+30 days'),
            "status" => fake()->randomElement(["pending","in progress","completed"]),
            "priority"=> fake()->randomElement(["low","medium","high"]),
            "image_path"=> fake()->imageUrl(),
            "assigned_user_id"=> 1,
            "created_by"=> 1,
            "updated_by"=> 1
        ];
    }
}
