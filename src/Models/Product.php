<?php

namespace Ecoflow\Shop\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['name', 'desc', 'price', 'discount', 'qt', 'hot', 'type_id', 'unit_id', 'active'];

    /**
     * With relations
     *
     * @var array
     */
    protected $with = ['categories', 'shops'];

    /**
     * Belongs to many Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Shops
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function shops()
    {
        return $this->belongsToMany(Shop::class);
    }

}
