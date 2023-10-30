<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'user',
        'maya_transaction_id',
        'maya_status',
        'pay_method',
        'ship_method',
        'status',
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
