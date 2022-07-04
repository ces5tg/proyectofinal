<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function __invoke(Request $request){
    $slug = $request->category_slug;
    return view('category', compact('slug'));
   }
}
