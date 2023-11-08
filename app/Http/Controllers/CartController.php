<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        dd($cartItems);

        // $products = [];

        // foreach($cartItems as $item){
        //     $product = Product::find($ci->id);
        //     array_push($products, [
        //         'productName' => $product->name,
        //         'content' => $product->description,
        //         'productPrice' => $product->price,
        //         'image' => asset('images/home/product-1.webp'),
        //     ]);
        // }

        return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        $productId = $request->id;
    
        // Check if the product is already in the cart
        $existingCartItem = \Cart::get($productId);
    
        // If the product is in the cart, update its quantity
        if ($existingCartItem) {
            \Cart::update($productId, [
                'quantity' => $existingCartItem->quantity + 1,
            ]);
        } else {
            // If the product is not in the cart, add it as a new item
            \Cart::add([
                'id' => $productId,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => 1,
            ]);
        }
    
        // Return a JSON response indicating success
        return response()->json(['message' => 'Item added to cart successfully']);
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');
        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
