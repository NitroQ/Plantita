<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transactions;
use App\Models\TransactionProducts;
use App\Models\User;
use Validator;
use Log;
use DB;


class TransactionController extends Controller
{
    public function checkout(Request $request)
    {

        $items = $request->input('items');
        $quantity = $request->input('quantity');

        if($items == null){
            return redirect()->back();
        }else if(count($items) != count($quantity)){
            return redirect()->back()->with('error', 'Something went wrong');
        }

        $product = [];
        
        $address = auth()->user();

        foreach ($items as $item) {
            $product[] = Product::find($item);
        }

        
        return view('pages.transaction.checkout', [
            'products' => $product,
            'quantity' => $quantity,
            'user' => $address
        ]);
    }

    public function createTransaction(Request $request)
    {
        
        $validated = $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'nullable',
            'street_address' => 'required',
            'building_address' => 'nullable',
            'city' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
            'ship_method' => 'required',
        ],[
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'street_address.required' => 'Street address is required',
            'city.required' => 'City is required',
            'zip_code.required' => 'Zip code is required',
            'phone.required' => 'Phone is required',
            'ship_method.required' => 'Ship method is required',
        ]);

        $items = $request->input('items');
        $quantity = $request->input('quantity');

        if($items == null){
            return redirect()->back();
        }else if(count($items) != count($quantity)){
            return redirect()->back()->with('error', 'Something went wrong');
        }

        try{
            DB::beginTransaction();

            $transaction = Transactions::create([
                'user_id' => auth()->user()->id,
                'payment_transaction_id' => null,
                'payment_status' => 'pending',
                'pay_method' => 'cash',
                'ship_method' => $validated['ship_method'],
                'shipping_cost' => $request->shipping,
                'name' => $validated['first_name'] . ' ' . $validated['last_name'],
                'company' => $validated['company'],
                'street_address' => $validated['street_address'],
                'building_address' => $validated['building_address'],
                'city' => $validated['city'],
                'zip_code' => $validated['zip_code'],
                'phone' => $validated['phone'],
            ]);

            $subtotal = 0;

            for($i = 0; $i < count($items); $i++){
                $subtotal += (Product::find($items[$i])->price * $quantity[$i]);

                TransactionProducts::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $items[$i],
                    'quantity' => $quantity[$i],
                ]);
                \Cart::remove($items[$i]);
            }

            $transaction->subtotal = $subtotal;
            $transaction->total = $subtotal + $request->shipping;
            $transaction->save();

            if($request->remember == 'yes'){
                $user = User::find(auth()->user()->id);

                    $user->company = $validated['company'];
                    $user->street_address = $validated['street_address'];
                    $user->building_address = $validated['building_address'];
                    $user->city = $validated['city'];
                    $user->zip_code = $validated['zip_code'];
                    $user->phone = $validated['phone'];
                    $user->save();
            }

            $products = Product::whereIn('id', $items)->get();

            DB::commit();
            
            return view('pages.transaction.order-confirmation', compact('transaction', 'products', 'quantity'));
        }catch(\Exception $e){
            Log::error($e);
            DB::rollback();

            return redirect()
            ->back()
            ->with('error', 'Something went wrong');
        }

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
