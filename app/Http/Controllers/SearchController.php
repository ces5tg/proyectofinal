<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
     /* Recuperamos los datos pasados del HEADER-SEACH-COMPONENET */
     public function __invoke(Request $request){
       
        $product = $request->name;
        return view('search',compact('product'));

     }
}
