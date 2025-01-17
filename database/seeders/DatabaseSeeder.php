<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Kanye',
            'email' => 'kanye@example.com',
            'password'=> bcrypt('12345678'),
        ]);

        Project::factory()->count(30)->hasTasks(30)->create();
    }
}
