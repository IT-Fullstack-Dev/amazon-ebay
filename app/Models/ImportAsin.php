<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportAsin extends Model
{
    use HasFactory;

    protected $table = 'productasin';
    protected $fillable = [
    	'user_id',
    	'import_name_id',
    	'productasin'
    ];
}
