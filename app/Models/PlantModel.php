<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantModel extends Model
{
    use HasFactory;

    protected $table = 'plants';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id',
    ];
}
