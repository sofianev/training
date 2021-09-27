<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'libelle' => $this->faker->name(),
            'prix'   => $this->faker->randomFloat(2, 10, 500),
            'quantit' => $this->faker->randomFloat(50),
            'status' => $this->faker->numberBetween(0, 1),



        ];
    }
}
