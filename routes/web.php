<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\CategoryController;

/* use App\Http\Controllers\PruebaController; */
use App\Http\Controllers\SearchController;
use App\Http\Livewire\CategoryComponent;
/* use App\Http\Livewire\Prueba; */
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/product-category/{category_slug}', CategoryController::class)->name('product.category');
Route::get('/cart', CartController::class)->name('product.cart');
Route::get('/search', SearchController::class)->name('product.search');
Route::get('/prueba' , function(Request $request){
    $product = $request->product;
        return $product;
})->name('prueba');
Route::get('/product/{slug}', DetailsController::class)->name('product.details');
Route::get('/checkout', CheckoutController::class)->name('checkout');



/* Route::get('/prueba',function() { 
Cart::destroy();
   
})->name('prueba'); */
/* Route::get('/prueba', PruebaController::class)->name('prueba'); */

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */



