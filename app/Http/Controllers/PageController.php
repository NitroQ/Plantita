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

    // ADMIN
  public function dashboard(){
      return view('pages.admin.dashboard');
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

  // product management
  public function products(){
      return view('pages.admin.products.products');
  }
  public function addProduct(){
      return view('pages.admin.products.add-product');
  }
  public function viewProduct(){
      return view('pages.admin.products.view-product');
  }
  public function editProduct(){
      return view('pages.admin.products.edit-product');
  }

  // plant care informations
  public function plantcare(){
      return view('pages.admin.plantcare.plantcare');
  }
  public function viewPlantInfo(){
      return view('pages.admin.plantcare.view-plantinfo');
  }
  public function editPlantInfo(){
      return view('pages.admin.plantcare.edit-plantinfo');
  }

  // user management
  public function users(){
      return view('pages.admin.user.users');
  }
  public function viewUser(){
    return view('pages.admin.user.view-user');
  }

    // AUTH
  public function signin(){
      return view('pages.signin');
  }
      public function signup(){
      return view('pages.signup');
  }

      // contact page
  public function contact(){
      return view('pages.contact');
  }

  public function publicProduct() {
    $products = [];

      for ($i = 0; $i < 10; $i++) {
        array_push($products, [
          'productName' => 'Chinese Money Plant',
          'content' => 'A tropical plant with striking foliage that resembles an...',
          'productPrice' => '500',
          'image' => asset('images/products/plant-sample.webp'),
        ]);
      }

      return view('pages.products', [
        "prods" => $products
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
