<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->company,'address'=>$this->faker->address,'phone'=>$this->faker->e164PhoneNumber,'email'=>$this->faker->safeEmail,'facebook'=>'dinnerCulbfacebook.com',	'twitter'=>'dinnclub.twitteer',
        ];
    }
}
