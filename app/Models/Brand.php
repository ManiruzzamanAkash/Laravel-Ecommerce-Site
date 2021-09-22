<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  public $fillable = [
    'name',
    'description',
    'image'
  ];

  public function products()
  {
    return $this->hasMany(Category::class);
  }
}
