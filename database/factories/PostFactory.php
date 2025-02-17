<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
class PostFactory extends Factory
{
    protected $model = Post::class; 

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
