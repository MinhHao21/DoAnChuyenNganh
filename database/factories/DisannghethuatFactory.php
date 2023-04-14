<?php

namespace Database\Factories;

use App\Models\Disannghethuat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DisannghethuatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Disannghethuat::class;

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
            #'thumbnail' => $this->faker->image('storage/app/public',300,200, null, false),
            'name' => $this->faker->name(),
            'slug' => Str::random(10),
            'noidung' => $this->faker->text($maxNbChars = 2000),
            'sangtac' => $this->faker->name(),
            // 'nghesynghenhan_id' => $this->faker->numberBetween(1,4),
            'thehien' => $this->faker->name(),
            // 'nghenhan_thehien' => $this->faker->numberBetween(1,4),
            'loimoi' =>  $this->faker->name(),
            'phoikhi' =>  $this->faker->name(),
            'luotxem' => $this->faker->numberBetween(115,2215),
        ];
    }
}
