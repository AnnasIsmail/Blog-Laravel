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
            'title' => $this->faker->sentence(mt_rand(2, 10)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>' . implode( '</p><p>' ,$this->faker->paragraphs(mt_rand(10 - 20))) . '</p>',
            // 'body' => collect($this->faker->paragraphs(mt_rand(10 , 20)))->map(function($p){
            //     return "<p>$p</p>";
            // })->implode(''),
            'body' => collect($this->faker->paragraphs(mt_rand(10 , 20)))->map(fn($p)=> "<p>$p</p>")->implode(''),
            'category_id' => mt_rand(1, 9),
            'user_id' => mt_rand(1, 20),
        ];
    }
}
