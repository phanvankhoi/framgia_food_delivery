<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class Helper
{
    public static function importFile($file, $path)
    {
        if (isset($file)) {
            $avatarName = $file->hashName();
            $file->move($path, $avatarName);
            
            return $avatarName;
        }
    }

    public static function showPrice($food)
    {
    	if ($food->discountFood->id != config('customer.product.no_discount') 
                && $food->discountFood->end_date >= Carbon::now()) {
    		
            return $food->price - ( ($food->price * $food->discountFood->discount ) / config('customer.percentage') );
    	}
    	else {
    		return $food->price;
    	}
    }
}
