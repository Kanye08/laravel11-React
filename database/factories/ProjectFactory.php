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
            "name"=> fake()->sentence(),
            "description" => fake()->realText(),
            "due_date"=> fake()->dateTimeBetween('now','+30 days'),
            "status" => fake()->randomElement(["pending","in progress","completed"]),
            "image_path"=> fake()->imageUrl(),
            "created_by"=> 1,
            "updated_by"=> 1
        ];
    }
}
