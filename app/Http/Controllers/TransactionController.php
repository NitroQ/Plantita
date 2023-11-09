<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TransactionController extends Controller
{
    public function checkout(Request $request)
    {

        $items = $request->input('items');
        $quantity = $request->input('quantity');

        $product = [];

        foreach ($items as $item) {
            $product[] = Product::find($item);
        }

        return view('pages.transaction.checkout', [
            'products' => $product,
            'quantity' => $quantity
        ]);
    }

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


    public function orderConfirmation()
    {
        return view('pages.transaction.order-confirmation');
    }

    public function productFailed()
    {
        return view('pages.transaction.product-failed');
    }

    public function productCancelled()
    {
        return view('pages.transaction.product-cancelled');
    }
}
