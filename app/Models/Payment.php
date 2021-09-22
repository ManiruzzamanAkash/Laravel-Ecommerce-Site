<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $fillable = [
    	'name',
    	'image',
    	'priority',
    	'short_name',
    	'no',
    	'type'
    ];
    
}
