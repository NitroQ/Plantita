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

        dd($request->all());
        $items = $request->input('items');
        $quantity = $request->input('quantity');

        if($items == null){
            return redirect()->back();
        }else if(count($items) != count($quantity)){
            return redirect()->back()->with('error', 'Something went wrong');
        }

        $validate = $this->validate($request,[
            'email' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
            'ship_method' => 'required',
            'pay_method' => 'required',
        ],[
            'email.required' => 'Email is required',
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'street_address.required' => 'Street address is required',
            'city.required' => 'City is required',
            'zip_code.required' => 'Zip code is required',
            'phone.required' => 'Phone is required',
            'ship_method.required' => 'Ship method is required',
            'pay_method.required' => 'Pay method is required',
        ]);
        
        try{
            DB::beginTransaction();

            $transaction = Transactions::create([
                'user_id' => auth()->user()->id,
                'payment_transaction_id' => null,
                'payment_status' => 'pending',
                'pay_method' => $validate['pay_method'],
                'ship_method' => $validate['ship_method'],
                'status' => 'pending',
                'name' => $validate['first_name'] . ' ' . $validate['last_name'],
                'company' => $request->company,
                'street_address' => $validate['street_address'],
                'building_address' => $request->building_address,
                'city' => $validate['city'],
                'zip_code' => $validate['zip_code'],
                'phone' => $validate['phone'],
            ]);

            for($i = 0; $i < count($items); $i++){
                TransactionProducts::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $items[$i],
                    'quantity' => $quantity[$i],
                ]);
            }

            if($request->remember == 'yes'){
                $user = User::find(auth()->user()->id);

                $user->update([
                    'company' => $request->company,
                    'street_address' => $validate['street_address'],
                    'building_address' => $request->building_address,
                    'city' => $validate['city'],
                    'zip_code' => $validate['zip_code'],
                    'phone' => $validate['phone'],
                ]);
            }

            DB::commit();

        }catch(\Exception $e){
            Log::error($e);
            DB::rollback();

            return redirect()
            ->back()
            ->with('error', 'Something went wrong');
        }





        return view('pages.transaction.checkout-address');
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
