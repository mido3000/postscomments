<?php

namespace App\Domains\Comments\Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class commentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->text(),
            'post_id' => Post::all()->random()->id,
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
        ];
    }
}
