<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Black extends Model
{
    use HasFactory;
    protected $table = 'blackasin';
    protected $fillable = [
        'user_id',
        'blackasin'
    ];
      
}
