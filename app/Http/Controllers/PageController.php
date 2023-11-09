<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    //front
    public function index() {
      $products = Product::all();

      return view('pages.public.index', [
        "prods" => $products
      ]);
    }


      // contact page
  public function contact(){
      return view('pages.public.contact');
  }

  public function publicProduct() {
    $products = Product::all();

      return view('pages.product.index', [
        "products" => $products
      ]);
  }

  public function productShow($id) {
    $product = Product::find($id);

    $suggest = Product::where('category', $product->category)->where('id', '!=', $id)->get();

    return view('pages.product.view', compact('product', 'suggest'));
  }

    // about page
    public function about()
    {
        return view('pages.public.about');
    }
    // terms and conditions page - client
    public function termsConditions()
    {
        return view('pages.public.terms-conditions');
    }
  
}
