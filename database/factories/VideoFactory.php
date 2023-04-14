<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'danhmuc_id' => 23,
            #'thumbnail' => $this->faker->image('storage/app/public',300,200, null, false),
            'name' => $this->faker->name(),
            'slug' => Str::random(10),
            'linkyoutube' => 'https://www.youtube.com/watch?v=7TApUE0UFqg&list=PLPCoBaN8vOf8mOP6dWOUiUL5D3GQ4juhE&index=5',
            'bieudien' => $this->faker->numberBetween(1,4),
            'sangtac' => $this->faker->numberBetween(1,4),
            'disannghethuat' => $this->faker->numberBetween(1,4),
            'caulacbo' => $this->faker->numberBetween(1,4),
            'luotxem' => $this->faker->numberBetween(115,2215),
        ];
    }
}
