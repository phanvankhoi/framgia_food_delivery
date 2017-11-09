<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'date',
        'total_price',
        'user_id',
    ];

    /**
    * Get order's foodOrders
    */
    public function foodOrders()
    {
        return $this->hasMany(FoodOrder::Class);
    }

    /**
    * Get order's user
    */
    public function user()
    {
        return $this->belongsTo(User::Class);
    }
}
