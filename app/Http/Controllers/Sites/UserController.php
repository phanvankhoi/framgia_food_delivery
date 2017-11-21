<?php

namespace App\Http\Controllers\Sites;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();

        return view('layouts.profile', compact('user'));
    }

    public function getProfile()
    {
        $user = Auth::user();

        return view('layouts.editprofile', compact('user'));
    }

    public function editProfile(Request $request, $id)
    {   
        $this->validate($request, [
            'name' => 'required|max:30',
            'phone' => 'size:11|unique:users,phone,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'address' => 'string|nullable',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);        
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email; 
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension('avatar');            
            $file->move(config('customer.link.avatar'), $fileName);
            File::delete($user->avatar);
            $user->avatar = config('customer.link.avatar').$fileName;
        }
        $user->save();

        return redirect()->route('showProfile');
    }
}
