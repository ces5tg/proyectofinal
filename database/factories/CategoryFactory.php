<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_name = $this->faker->unique()->words($nb = 2, $asText = true);
        $slug = Str::slug($category_name);
        return [
            
            'name' => $category_name,
            'slug' => $slug,
            'image' => null/* 'categories/' . $this->faker->image('public/storage/categories',640 , 480, null,false) */,#true =>public/storage/products/img.jpg !!! false =>image.jpg
        ];
    }
}
