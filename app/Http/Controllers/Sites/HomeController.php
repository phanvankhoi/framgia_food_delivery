<?php

namespace App\Http\Controllers\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class HomeController extends Controller
{

    public function index()
    {
        return view('layouts.index');
    }

    public function viewContact()
    {
        return view('layouts.contact');
    }

    public function view404()
    {
        return view('layouts.404');
    }

    public function viewTopFood()
    {
        $foods = Food::top();
        $paginator = $foods->pagination(config('customer.top_food.paginate'));
        $count = $foods->count();

        return view('layouts.top_food', compact(['paginator',
            'count',
        ]));
    }

    public function searchFood(Request $request)
    {
        if (!$request->ajax()) {
            return view('layouts.404');
        }
        $foods = Food::search($request->keyword)->get();

        return view('layouts.search', compact('foods'))->render();
    }
}
