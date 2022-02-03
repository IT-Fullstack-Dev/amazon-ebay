<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'emailtemplate';
    protected $fillable = [
            'store_id',
            'email_template'
    ];
}
