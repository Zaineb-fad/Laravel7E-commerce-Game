<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;

class TextSearchController extends Controller
{

    public function index(Request $request)
    {
        if($request->has('product_search')){
            $products = Product::search($request->product_search)
                ->paginate(7);
        }else{
            $products = Product::paginate(7);
        }
        return view('products', compact('products'));
    }

    public function fullTextSearch(Request $request)
    {
        $this->validate($request,['product_name'=>'required']);
        $this->validate($request,['product_price'=>'required']);

        $products = Product::create($request->all());
        return back();
    }
}