<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //front
    public function index() {
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
}