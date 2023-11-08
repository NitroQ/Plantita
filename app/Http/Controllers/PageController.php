<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    //front
    public function index() {
      $products = Product::all();

      return view('pages.index', [
        "prods" => $products
      ]);
    }


  // transactions
  public function transactions(){
      return view('pages.admin.transactions.transactions');
  }
  public function viewTransaction(){
      return view('pages.admin.transactions.view-transaction');
  }
  public function pending(){
      return view('pages.admin.transactions.pending');
  }
  public function pack(){
      return view('pages.admin.transactions.pack');
  }
  public function shipped(){
      return view('pages.admin.transactions.shipped');
  }

      // contact page
  public function contact(){
      return view('pages.contact');
  }

  public function publicProduct() {
    $products = Product::all();

      return view('pages.products', [
        "products" => $products
      ]);

  }

    // about page
    public function about()
    {
        return view('pages.about');
    }

    //orderconfirm page
    public function orderConfirmation()
    {
        return view('pages.order-confirmation');
    }

    //erro-failed pages
    public function productFailed()
    {
        return view('pages.product-failed');
    }
    public function productCancelled()
    {
        return view('pages.product-cancelled');
    }
    public function error404()
    {
        return view('pages.error404');
    }
}
