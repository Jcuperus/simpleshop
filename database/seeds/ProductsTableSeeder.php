<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 50)->create()->each(function ($category) {
            $category->products()->saveMany(factory(Product::class, rand(1, 5))->create());
        });
    }
}
