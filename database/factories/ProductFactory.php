<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name =$this->faker->name();
        $category = Category::all()->random();
        return [
            'name' =>$name,
            'slug' => Str::slug($name),
            'description'=>$this->faker->sentence(12),
            'short_description'=>$this->faker->text(),
            'price_cost'=>$this->faker->randomElement([19.99,49.99,99.99]),
            'quantity' =>$this->faker->randomElement([34,49,60,30,12,95]),
            'status'=>$this->faker->randomElement([1,2]),/* 1-con stock , 2 -sin stock */
            'color'=>$this->faker->randomElement(['red','blue']),
            'size'=>$this->faker->randomElement(['s','l','m','xl']),
            'promotion'=>null,
            'price_desc'=>$this->faker->randomElement([3,4,6,1,5]),
            'image' =>null, /*  'products/' . $this->faker->image('public/storage/products',640 , 480, null,false), */   #true =>public/storage/products/img.jpg !!! false =>image.jpg
            'category_id'=>$category->id,
        ];
    }
}
