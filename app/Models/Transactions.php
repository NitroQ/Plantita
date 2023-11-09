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
        'user_id',
        'payment_transaction_id',
        'payment_status',
        'pay_method',
        'ship_method',
        'status',
        'subtotal',
        'total',
        'shipping_cost',
        'name',
        'company',
        'street_address',
        'building_address',
        'city',
        'zip_code',
        'phone',
    ];


}
