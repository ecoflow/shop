<?php

namespace Ecoflow\Shop\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use SoftDeletes;

    /**
     * Fillable array
     *
     * @var array
     */
    protected $fillable = ['name', 'desc', 'address', 'city', 'zipcode', 'country'];

    /**
     * Belongs to many Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
