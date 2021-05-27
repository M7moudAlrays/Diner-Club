<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>'khaled',
            'email' =>'k@gmail.com',
            'status'=>'Active',
            'roles_name'=>'["owner"]',
            'email_verified_at' => now(),
            'password' =>12345678, // password
            'remember_token' => Str::random(10),
        ];
    }
}
