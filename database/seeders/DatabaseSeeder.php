<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use App\Models\Sale;
use App\Models\Stock;
use App\User;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        ProductCategory::factory(1)->create();
        Product::factory(1)->create();
        Stock::factory(1)->create();
        Review::factory(1)->create();
        Sale::factory(1)->create();
    }
}
