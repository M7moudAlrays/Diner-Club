<?php

namespace Database\Factories;

use App\Models\Rating;
use App\Models\Reciepe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rateable_type'=>'App\Models\Reciepe',
            'rating'=>$this->faker->numberBetween($min = 1, $max =5),
            'rateable_id'=>Reciepe::all(['id'])->random(),
            'user_id'=>User::all(['id'])->random(),
        ];
    }
}
