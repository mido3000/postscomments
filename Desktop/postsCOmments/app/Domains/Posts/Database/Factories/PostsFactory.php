<?php

namespace App\Domains\Posts\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class postsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->paragraphs(3, true),
        ];
    }
}
