<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
//            'description' => $this->faker->paragraph(2, true),
//            'price' => $this->faker->numberBetween(99, 999),
            'resto_id' => 1,
//            'category_id' => 1,
        ];
    }
}
