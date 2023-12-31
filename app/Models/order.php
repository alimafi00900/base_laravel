<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table ="orders";
    protected $fillable = [
        'products',
        'customer_id',
        'amount',
        'profit_amount',
    ];
}
