<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportName extends Model
{
    use HasFactory;
    protected $table = 'importname';
    protected $fillable = [

    	'user_id',
    	'import_name',
    	'productcount'
    ];

}
