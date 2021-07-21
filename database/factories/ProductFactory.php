<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'image' => $this->faker->image('public/storage/images', 900, 400, 'cats', false),
            'rent' => $this->faker->numberBetween(500,5500),
            'refundable_amount' => $this->faker->randomDigit,
            'product_category_id' => function(){
                return ProductCategory::all()->random();
            },
        ];
    }
}
