<?php

namespace Database\Factories;

use App\Models\orders;
use Illuminate\Database\Eloquent\Factories\Factory;

class ordersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = orders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->randomDigitNotNull,
        'pizza_id' => $this->faker->randomDigitNotNull,
        'driver_id' => $this->faker->randomDigitNotNull,
        'order_date' => $this->faker->date('Y-m-d H:i:s'),
        'delivery_date' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
