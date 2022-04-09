<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    //
    public function master() 
    {
        //
        $product = Product::all();  
        return view('master', compact('product'));
    }
}
