<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class MenuComposer
{

	public function compose(View $view)
	{	
		$categories = Category::all();
		$view->with('categories', $categories);
	}
}
