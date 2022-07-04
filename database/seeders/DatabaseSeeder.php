<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('categories');
        Storage::deleteDirectory('products');
        Storage::deleteDirectory('sliders');
        Storage::makeDirectory('categories');
        Storage::makeDirectory('products');
        Storage::makeDirectory('sliders');
    
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(HomeSliderSeeder::class);
    }
}
