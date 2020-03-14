<?php

namespace Ecoflow\Shop\Models;

use Illuminate\Database\Eloquent\Model;

class ProductUnit extends Model
{

    protected $table = 'product_units';

    protected $fillable = ['name', 'desc'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
