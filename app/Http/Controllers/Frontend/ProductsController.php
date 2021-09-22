<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\Product;

class ProductsController extends Controller
{
  public function index()
  {
      $products = Product::orderBy('id', 'desc')->paginate(9);
      return view('frontend.pages.product.index')->with('products', $products);
  }
  public function show($slug)
  {
      $product = Product::where('slug', $slug)->first();
      if (!is_null($product)) {
        return view('frontend.pages.product.show', compact('product'));
      }else {
        session()->flash('errors', 'Sorry !! There is no product by this URL..');
        return redirect()->route('products');
      }
  }
}
