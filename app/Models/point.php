<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class point extends Model
{
    use HasFactory;
    protected $table ="points";
    protected $fillable=[
        'point',
        'max_amount',
        'min_amount',
    ];
}
