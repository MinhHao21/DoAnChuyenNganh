<?php

namespace Database\Factories;

use App\Models\Caulacbo;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CaulacboFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Caulacbo::class;

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
            'name' => $this->faker->name(),
            'slug' => Str::random(10),
            'diachi' => Str::random(10),
            'diaban_id' =>  $this->faker->numberBetween(1,20),
            'luongthanhvien' =>  $this->faker->numberBetween(5,15),
            'quyche' => Str::random(200),
            'thanhvien' => Str::random(100),
            'lichsinhhoat' => Str::random(200),
            'luotxem' => $this->faker->numberBetween(115,2215),
        ];
    }
}
