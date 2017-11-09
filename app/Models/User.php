<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SortDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'gender', 
        'email', 
        'password',
        'avatar',
        'phone',
        'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    /**
     * Get user's orders.
     */
    public function orders()
    {
        return $this->hasMany(Order::Class);
    }

    /**
     * Get user's reviews.
     */
    public function reviews()
    {
        return $this->hasMany(Review::Class);
    }
}
