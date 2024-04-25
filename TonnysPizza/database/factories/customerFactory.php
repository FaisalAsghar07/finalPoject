<?php

namespace Database\Factories;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class customerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = customer::class;

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
        'address' => $this->faker->word,
        'order_id' => $this->faker->randomDigitNotNull
        ];
    }
}
