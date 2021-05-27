<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Reciepe;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReciepeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reciepe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name'=>$this->faker->title,
            'ingrediens'=>$this->faker->sentence(7),
            'image'=>$this->faker->imageUrl(),
            'description'=>$this->faker->sentence(8),
            'price'=>$this->faker->numberBetween($min = 100, $max = 500)  ,
            'evaluation'=>$this->faker->numberBetween($min = 1, $max = 5)  ,
            'prape_time'=>$this->faker->time(),

           'category_id'=>Category::all(['id'])->random(),
        ];
    }
}
