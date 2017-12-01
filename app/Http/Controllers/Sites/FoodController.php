<?php

namespace App\Http\Controllers\Sites;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Food;
// use App\Models\Category;

class FoodController extends Controller
{
    public function index($id)
    {   
        $food = Food::find($id);
        return view('layouts.food_detail', compact('food'));
    }
}
