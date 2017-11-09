<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountFood extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'discount',
        'start_date',
        'end_date',
        'food_id',
    ];

    /**
    * Get discoutFood's food
    */
    public function food()
    {
        return $this->belongsTo(Food::Class);
    }
}
