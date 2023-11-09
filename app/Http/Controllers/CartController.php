<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        $productIds = $cartItems->pluck('id');
        $products = Product::whereIn('id', $productIds)->get();
        return view('pages.user.basket', compact('cartItems', 'products'));
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
        $id = $request->rowId;
        $quantity = (int)$request->quantity;
    
        try {
            \Cart::update($id, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $quantity
                ),
            ));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    
        return response()->json(['message' => 'Cart updated successfully']);
    }
    
    public function removeFromCart(Request $request)
    {
        $id = $request->rowId;
        \Cart::remove($id);
    
        return response()->json(['message' => 'Item removed from cart successfully']);
    }

    public function clearAllCart()
    {
        \Cart::clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
