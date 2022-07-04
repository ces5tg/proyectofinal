<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class HomeSliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = Category::all()->random();
        $name=$this->faker->sentence(2);
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'subtitle'=>$this->faker->sentence(5),
            'description' =>$this->faker->text(),
            'image' => null/* 'sliders/' . $this->faker->image('public/storage/sliders',640 , 480, null,false) */,#true =>public/storage/products/img.jpg !!! false =>image.jpg
            'status' =>'1', /* 1 => ACTIVO , 2=>INACTIVO */
            'category_id'=>$category->id
        ];
    }
}
