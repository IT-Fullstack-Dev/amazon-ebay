<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInformation extends Model
{
    use HasFactory;
    protected $table = 'product_information';
    protected $fillable = [

    	 'user_id',
    	 'importname_id',
    	 'asin',
    	 'title',
    	 'price',
    	 'quantity',
    	 'category',
    	 'shipping_day',
    	 'together_buy',
    	 'description',
    	 'ranking',
    	 'sale_date',
    	 'product_size',
    	 'brand',
		 'main_imageURL'
    ];
}
