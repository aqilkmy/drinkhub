<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'product',
    'price',
    'quantity',
    'latitude',
    'longitude',
    ];


}
