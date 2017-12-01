<?php

namespace App\Http\Controllers\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Order;
use App\Models\FoodOrder;
use Cart;

class CartController extends Controller
{
    public function index() 
    {
        $cart_items = Cart::content();
        $total = Cart::total();
        if(Auth::check()) {
            $user = Auth::user();
            return view('layouts.cart', compact(['cart_items', 'total', 'user']));
        }
        
        return view('layouts.cart', compact(['cart_items', 'total']));
    }

    public function addToCart(Request $request, $id) 
    {
        $food = Food::find($id);
        Cart::add($food->id, $food->name, 1, $food->price, ['image' => $food->image]);

        return back();
    }

    public function removeFromCart($id)
    {
        Cart::remove($id);

        return back();
    }

    public function updateCart(Request $request, $id)
    {
        $desc = $request->desc;
        $qty = $request->quantity;
        if (isset($desc)) {
            Cart::update($id, $qty-1);
        }
        else {
            Cart::update($id, $qty+1);
        }

        return back();
    }

    public function checkEmail(Request $request)
    {
        if (!$request->ajax()) {
            return view('layouts.404');
        }
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if (!is_null($user)) {
            $result = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'address' => $user->address,
                'phone' => $user->phone,
            ];
        }
        else {
            $result = [
                'id' => 0,
                'name' => '',
                'email' => $email,
                'address' => '',
                'phone' => '',
            ];
        }

        return response()->json($result);
    }

    public function store(Request $request)
    {   
        $user_id = $request->user_id;
        if ($user_id != 0) {
            $user = User::find($user_id);           
        }
        else {
            $user = new User();
            $user->email = $request->email;
            $user->password = bcrypt('');
        }
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save(); 

        $order = new Order();
        $order->user_id = $user->id;
        $order->description = '';
        $order->date = date('Y-m-d H:i:s');
        $order->total_price = Cart::total();
        $order->status = 1;
        $order->save();

        foreach(Cart::content() as $item) {
            $food_order = new FoodOrder();
            $food_order->order_id = $order->id;
            $food_order->food_id = $item->id;
            $food_order->quantity = $item->qty;
            $food_order->price = $item->subtotal;
            $food_order->save(); 
        }
        return Cart::content();
    }

    public function show()
    {
        return Cart::content();
    }
}
