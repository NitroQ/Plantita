<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'name',
        'category',
        'scientific_name',
        'lifespan',
        'quantity',
        'price',
        'description',
        'status',
        'image',
        'care_level',
        'care_description',
        'watering_level',
        'watering_description',
        'sun_level',
        'sun_description',
    ];

}
