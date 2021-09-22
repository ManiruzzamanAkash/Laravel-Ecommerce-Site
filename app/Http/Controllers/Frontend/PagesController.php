<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Slider;

class PagesController extends Controller
{
    public function index()
    {
      $sliders = Slider::orderBy('priority', 'asc')->get();
      $products = Product::orderBy('id', 'desc')->paginate(9);
      return view('frontend.pages.index', compact('products', 'sliders'));
    }

    public function contact()
    {
      return view('frontend.pages.contact');
    }

    public function search(Request $request)
    {
      $search = $request->search;

        $products = Product::orWhere('title', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%')
        ->orWhere('slug', 'like', '%'.$search.'%')
        ->orWhere('price', 'like', '%'.$search.'%')
        ->orWhere('quantity', 'like', '%'.$search.'%')
        ->orderBy('id', 'desc')
        ->paginate(9);

        return view('frontend.pages.product.search', compact('search', 'products'));
    }

}
