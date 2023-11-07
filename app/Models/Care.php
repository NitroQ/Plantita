<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Care extends Model
{
    use HasFactory;

    protected $table = 'care';

    protected $fillable = [
        'care_level',
        'care_description',
        'watering_level',
        'watering_description',
        'sun_level',
        'sun_description',
    ];
}
