<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'transaction_id',
        'gateway',
        'status',
        'amount',
        'metadata', // optional, if you're storing additional details as JSON
    ];

}
