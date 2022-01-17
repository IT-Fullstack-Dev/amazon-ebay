<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckProduct extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'checkasin';
    protected $fillable = [
    	'user_id',
    	'importname_id',
    	'1pass_count',
    	'2pass_count',
        'total_count',
    	'check_status',
    	'start_work',
    	'end_work'
    ];
}
