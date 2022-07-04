<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function __invoke(Request $request){
        $slug = $request->slug;
        return view('details', ['slug'=>$slug]);
    }
}
