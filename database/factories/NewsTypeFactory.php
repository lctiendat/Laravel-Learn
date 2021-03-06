<?php

namespace Database\Factories;

use App\Models\NewsType;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewsType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'show' => $this->faker->randomElement($array = array('0', '1')),
            'category_id' => 1
        ];
    }
}
