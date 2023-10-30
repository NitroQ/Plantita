<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //front
    public function index()
     {
      $products = [];

      for ($i = 0; $i < rand(5, 10); $i++) {
        array_push($products, [
          'productName' => 'African Masc',
          'content' => 'A tropical plant with striking foliage that resembles an...',
          'productPrice' => '500',
          'image' => asset('images/home/product-1.webp'),
        ]);
      }

      return view('pages.index', [
        "prods" => $products
      ]);
    }

    // entry pages
    public function signin()
    {
        return view('pages.signin');
    }
    public function signup()
    {
        return view('pages.signup');
    }

    // contact page
    public function contact()
    {
        return view('pages.contact');
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
