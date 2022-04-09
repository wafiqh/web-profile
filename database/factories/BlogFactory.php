<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'gambar' => 'default.png',
            'judul' => $this->faker->word(),
            'isi' => $this->faker->paragraph(),
        ];
    }
}
