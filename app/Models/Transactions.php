<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Transactions extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'transactions';

    protected $fillable = [
        'user',
        'payment_transaction_id',
        'payment_status',
        'pay_method',
        'ship_method',
        'status',
        'name',
        'company',
        'street_address',
        'building_address',
        'city',
        'zip_code',
        'phone',
    ];

    protected function transactionProducts() {
        return $this->hasMany('App\Models\Product');
    }

    public function total(){
        $total = 0;
        foreach($this->transactionProducts as $product){
            $total += $product->price * $product->quantity;
        }
        return $total;
    }
}
