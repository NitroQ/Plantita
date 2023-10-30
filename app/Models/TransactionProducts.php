<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionProducts extends Model
{
    use HasFactory;

    protected $table = 'transaction_products';

    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity',
    ];

    public $timestamps = false;

    public function transaction(){
        return $this->belongsTo('App\Models\Transactions');
    }

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
