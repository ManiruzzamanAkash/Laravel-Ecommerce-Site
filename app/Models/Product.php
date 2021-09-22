<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function images()
  {
    return $this->hasMany(ProductImage::class);
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function brand()
  {
    return $this->belongsTo(Brand::class);
  }
}
