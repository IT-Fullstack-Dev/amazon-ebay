<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'manageorder';
    protected $fillable = [
      'user_id',
      'shippingStatus',
      'orderDate',
      'paymentDate',
      'estShippingDate',
      'orderNo',
      'itemCode',
      'itemTitle',
      'orderPrice',
      'orderQty',
      'receiver',
      'zipCode',
      'shippingAddr',
      'receiveMobile',
      'paymentMethod',
      'receiverEmail'
    ];
}
