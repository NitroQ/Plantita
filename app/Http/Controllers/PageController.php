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
  

public function publicProduct(Request $request) {
  $products = Product::query();
  $categories = $request->input('categories', []); 
  $types = $request->input('types', []); 

  if (!empty($categories)) {
      $products->whereIn('category', $categories);
  }

  if (!empty($types)) {
      $products->whereIn('type', $types);
  }
     if ($request->has('search')) {
        $search = $request->search;
        $s = '%'.$search.'%';
  
        $products->where('name', 'LIKE', $s)
            ->orWhere('type', 'LIKE', $s)
            ->orWhere('id', 'LIKE', $s);
    }

  $filteredProducts = $products->get();

  return view('pages.product.index', [
      "products" => $filteredProducts,
      "categories" => $categories, 
      "types" => $types, 
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
