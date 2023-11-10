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

        if ($items == null) {
            return redirect()->back();
        } else if (count($items) != count($quantity)) {
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
            'city' => 'not_in:Select City',
            'zip_code' => 'required',
            'phone' => 'required',
            'ship_method' => 'required',
        ],[
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'street_address.required' => 'Street address is required',
            'city.not_in' => 'City is required',
            'zip_code.required' => 'Zip code is required',
            'phone.required' => 'Phone Number is required',
            'ship_method.required' => 'Please pick a Shipping Method',
        ]);

        $items = $request->input('items');
        $quantity = $request->input('quantity');

        if ($items == null) {
            return redirect()->back();
        } else if (count($items) != count($quantity)) {
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
                $prod = Product::find($items[$i]);
                $subtotal += ($prod->price * $quantity[$i]);

                TransactionProducts::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $items[$i],
                    'quantity' => $quantity[$i],
                ]);
                \Cart::remove($items[$i]);

                $prod->quantity -= $quantity[$i];
                $prod->save();
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

            return view('pages.transaction.product-failed');
        }

    }

    public function transactions()
    {
        $transactions = Transactions::where('user_id', auth()->user()->id)->get()->reverse();
        return view('pages.transaction.transaction', compact('transactions'));
    }

    public function receiveTransaction($id)
    {
        $t = Transactions::find($id);
        $t->status = 'done';
        $t->save();

        return redirect()->back()->with('success', 'Transaction Complete!');
    }


    //admin functions
    public function index()
    {
        $transactions = Transactions::all();
        return view('pages.admin.transactions.index', compact('transactions'));
    }

    public function view($id)
    {
        $t = Transactions::find($id);
        return view('pages.admin.transactions.view', compact('t'));
    }
    
    public function edit($id)
    {
        $t = Transactions::find($id);
        return view('pages.admin.transactions.edit', compact('t'));
    }

    public function changeStatus($id, $status)
    {
        $t = Transactions::find($id);
        $t->status = $status;
        $t->save();

        return redirect()->back()->with('success', 'Status changed successfully');
    }

    public function pack(Request $request, $id)
    {
        $validate = $this->validate($request, [
            'courier' => 'required',
            'courier_location' => 'required',
            'shipping_id' => 'required',
        ],[
            'courier.required' => 'Please enter a Courier',
            'courier_location.required' => 'Please enter the Courier Location',
            'shipping_id.required' => 'Tracking/Reference No. is required',
        ]);

        $t = Transactions::find($id);
        $t->courier = $validate['courier'];
        $t->courier_location = $validate['courier_location'];
        $t->shipping_id = $validate['shipping_id'];
        $t->status = 'shipped';
        $t->save();


        return view('pages.admin.transactions.edit', compact('t'));
    }

    public function print($id)
    {
        $t = Transactions::find($id);
        return view('pages.admin.transactions.print', compact('t'));
    }
    
    public function productCancelled()
    {
        return view('pages.transaction.product-cancelled');
    }
}
