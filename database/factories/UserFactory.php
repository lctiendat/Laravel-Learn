<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name'=>$this->faker->name,
            'email'=>$this->faker->email,
            'username'=>$this->faker->userName,
            'password'=>$this->faker->password,
            'otp'=>$this->faker->numerify('##########'),
            'role_id'=>1,
        ];
    }
}
