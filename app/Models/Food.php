<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
        'discount_id',
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
    * Get food's discountFood
    */
    public function discountFood()
    {
        return $this->belongsTo(Food::Class);
    }

    /**
    * Get food's category
    */
    public function category()
    {
        return $this->belongsTo(Category::Class);
    }

    public function scopeTop($query)
    {
        return $query->where('is_top', config('customer.product.is_top'));
    }

    public function scopePagination($query)
    {
        return $query->paginate(config('customer.category.paginate'));
    }
}
