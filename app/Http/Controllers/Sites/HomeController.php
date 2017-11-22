<?php

namespace App\Http\Controllers\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{	

    public function index() {
    	return view('layouts.index');
    }

    public function viewContact() {
    	return view('layouts.contact');
    }

    public function view404() {
    	return view('layouts.404');
    }
}
