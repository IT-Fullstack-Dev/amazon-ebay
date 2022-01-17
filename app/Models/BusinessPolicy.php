<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPolicy extends Model
{
    use HasFactory;
    protected $table = "business_policy";
    protected $fillable = [
        'user_token',
        'currency_rating',
        'payment_id',
        'payment_name',
        'return_id',
        'return_name',
        'shipping_id',
        'shipping_name'
    ];
}
