<?php

namespace App\Models;

use App\OrderStatus;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_number','status'];

    protected $casts = [
        'status' => OrderStatus::class
    ];
}
