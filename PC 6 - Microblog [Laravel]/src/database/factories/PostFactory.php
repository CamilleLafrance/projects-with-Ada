<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => "Mon chat est trop mignon",
            'body' => "Photo prise au saut du lit. #Naturel",
            'img_url' => $this->faker->imageUrl(640, 480),
            'user_id' => 1
        ];
    }
}
