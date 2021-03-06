<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $table = 'order';
    protected $fillable = [
      'store_id',
      'order_id',
      'buyer_email',
      'receiverEmail'
    ];
}
