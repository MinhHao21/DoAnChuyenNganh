<?php

namespace Database\Factories;

use App\Models\Nghesynghenhan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NghesynghenhanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nghesynghenhan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'danhmuc_id' => 21,
            'name' => $this->faker->name(),
            'slug' => Str::random(10),
            #'anhdaidien' => $this->faker->image('storage/app/public',120,90, null, false),
            'namsinh' => $this->faker->numberBetween(1932,1975),
            'quequan' => Str::random(10),
            'diachi' => Str::random(10),
            'diaban' => Str::random(10),
            'quatrinhcongtac' => $this->faker->text($maxNbChars = 2000),
            'khenthuong' => $this->faker->text($maxNbChars = 2000),
            'luotxem' => $this->faker->numberBetween(115,2215),
        ];
    }
}
