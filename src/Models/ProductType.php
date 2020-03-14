<?php

namespace Ecoflow\Shop\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{

    protected $table = 'product_types';

    protected $fillable = ['name', 'desc'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
