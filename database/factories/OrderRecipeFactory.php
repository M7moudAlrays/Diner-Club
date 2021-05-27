<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Order;
use App\Models\OrderRecipe;
use App\Models\Reciepe;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderRecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderRecipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

                    'price'=>$this->faker->numberBetween($min = 100, $max = 500)  ,
                    'count'=>$this->faker->randomDigit,
                    'order_id'=>Order::all(['id'])->random(),
                    'receipe_id'=>Reciepe::all(['id'])->random(),
                    'receipe_name'=>$this->faker->name,

        ];
    }
}
