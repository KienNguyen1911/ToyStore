<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// use App\Model\Category;

class ProductController extends Controller
{
    //
    public function addProduct()
    {
        //
        // $product = Product::all();
        return view('addProduct');
    }

    public function saveProduct(Request $request)
    {
        //

        if ($request->isMethod('POST')) {

            if($request->hasFile('productimage')) {
                $file = $request->file('productimage');
                // $path = $request->file('images')->store('images/products');
                $path = public_path('img/products');
                $filename = time().'_' . $file->getClientOriginalName();
                $file->move($path, $filename);
            } 
        $product = new Product();
        $product->productname = $request->productname;
        $product->productcode = $request->productcode;
        $product->productdescription = $request->productdescription;
        $product->productprice = $request->productprice;
        $product->productimage = $filename;
        $product->save();
        return redirect()->route('master')->with('success', 'Product added successfully');
        }
    }

    public function master() 
    {
        //
        $product = Product::all();  
        return view('master', compact('product'));
    }
}
    

