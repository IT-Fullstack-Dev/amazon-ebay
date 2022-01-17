<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCheck extends Model
{
    use HasFactory;
    protected $table = 'product_check';
    protected $fillable = [
         'user_id',
         'imporname_id',
         'asin',
         'checkresult'
    ];
}
