<?php

namespace Database\Factories;

use App\Models\driver;
use Illuminate\Database\Eloquent\Factories\Factory;

class driverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'phone_number' => $this->faker->word,
        'order_id' => $this->faker->randomDigitNotNull
        ];
    }
}
