<?php

namespace Database\Factories;

use App\Models\Theatre;
use Illuminate\Database\Eloquent\Factories\Factory;

class TheatreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Theatre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'type' => '2D',
            'booked_seats' => 0,
        ];
    }
}
