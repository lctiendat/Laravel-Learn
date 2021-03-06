<?php

namespace Database\Factories;

use App\Models\Messenger;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessengerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Messenger::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>1,
            'content'=>$this->faker->text(),
            'rep_content'=>$this->faker->text(),
            'show'=>$this->faker->randomElement($array = array('0','1'))
        ];
    }
}
