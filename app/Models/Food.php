<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
        'price',
        'status',
        'description',
        'is_top',
        'catogory_id',
    ];

    /**
    * Get food's reviews
    */
    public function reviews()
    {
        return $this->hasMany(Review::Class);
    }

    /**
    * Get food's foodOrders
    */
    public function foodOrders()
    {
        return $this->hasMany(FoodOrder::Class);
    }

    /**
    * Get food's discountFoods
    */
    public function discountFoods()
    {
        return $this->hasOne(DiscountFood::Class);
    }

    /**
    * Get food's category
    */
    public function category()
    {
        return $this->belongsTo(Category::Class);
    }
}
