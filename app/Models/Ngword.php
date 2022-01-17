<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ngword extends Model
{
    use HasFactory;
    protected $table = 'blackword';
    protected $fillable =[
    	'user_id',
    	'blackword'
    ];
}
