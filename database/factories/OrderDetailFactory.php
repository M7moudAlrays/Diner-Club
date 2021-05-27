<?php

namespace Database\Factories;

use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'total_price'=>$this->faker->numberBetween($min = 100, $max = 500)  ,
            // 'count'=>$this->faker->randomNumber,
            'count'=>$this->faker->randomDigit,
            'status'=>$this->faker->randomElement(['pendding','cancelled','completed']),
            'order_id'=>Order::all(['id'])->random(),
            'user_id'=>User::all(['id'])->random(),
                ];
    }
}
