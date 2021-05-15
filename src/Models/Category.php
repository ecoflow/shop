<?php

namespace Ecoflow\Shop\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['name', 'desc'];

    /**
     * Belongs To many Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
