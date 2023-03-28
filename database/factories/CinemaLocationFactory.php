<?php

namespace Database\Factories;

use App\Models\CinemaLocation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CinemaLocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CinemaLocation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address,
            'what3words' => '///' . Str::random(5) . '.' . Str::random(6) . Str::random(7)
        ];
    }
}
