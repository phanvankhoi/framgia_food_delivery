<?php

namespace App\Http\Controllers\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Food;

class CategoryController extends Controller
{	
    public function index() 
    {	
    	$foods = Food::all();
    	$paginator = Food::pagination(config('customer.category.paginate'));
        $count = $foods->count();
        $top_foods = Food::top()->get();

     	return view('layouts.category', compact(['count',
            'foods',
            'top_foods',
            'paginator',
        ]));
    }

    public function show(Request $request, $id)
    {
    	$foods = Food::where('category_id', $id);
    	$paginator = $foods->pagination(config('customer.category.paginate'));
        $count = $foods->count();
        $top_foods = Food::top()->get();

    	return view('layouts.category', compact(['count',
            'foods',
            'top_foods',
            'paginator',
        ]));
    }
}
