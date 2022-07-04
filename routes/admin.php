<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Route;


Route::get('/', AdminController::class)->name('admin');
Route::resource('products' , ProductController::class)->names('admin.products');
Route::resource('categories' , CategoryController::class)->names('admin.categories');
Route::resource('sliders' , SliderController::class)->names('admin.sliders');