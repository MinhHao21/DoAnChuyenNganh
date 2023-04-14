<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            //
            'danhmuc_id' => $this->faker->numberBetween(1,4),
            'title' => $this->faker->text($maxNbChars = 100),
            'slug' => Str::random(10),
            #'thumbnail' => $this->faker->image('storage/app/public',300,200, null, false),
            'content' => $this->faker->text($maxNbChars = 2000),
            'excerpt' => $this->faker->text($maxNbChars = 400),
            // 'nghesynghenhan_id' =>  $this->faker->numberBetween(1,10),
            'disannghethuat_id' =>  $this->faker->numberBetween(1,10),
            'caulacbo_id' =>  $this->faker->numberBetween(1,10),
        ];
    }
}
