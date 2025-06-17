<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function productphotos()
    {
        return $this->hasMany(ProductPhoto::class, 'product_id');
    }
}
