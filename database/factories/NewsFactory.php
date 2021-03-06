<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->text($maxNbChars = 100),
            'content'=>$this->faker->text($maxNbChars = 200),
            'img'=>$this->faker->imageUrl(),
            'post_date'=>$this->faker->date($format = "Y-m-d",$max =now()),
            'show' => $this->faker->randomElement($array = array('0', '1')),
            'user_id'=>1,
            'news_type_id'=>1
        ];
    }
}
