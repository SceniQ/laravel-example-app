<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_id' => 1,
            'title'=> fake()->sentence(10),
            'body'=> fake()->paragraph(30),
            'image_path' => 'post_images/gallery.png',
        ];
    }
}
