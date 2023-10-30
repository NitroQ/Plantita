<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';

    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'street_address',
        'building_address',
        'city',
        'phone',
        'default',
    ];
}
