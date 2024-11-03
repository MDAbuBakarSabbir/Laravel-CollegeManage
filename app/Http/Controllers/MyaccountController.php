<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class MyaccountController extends Controller
{
    public function myaccount(){
        return view('dashboard.myaccount.index');
    }

    public function update(Request $request){
        $manager = new ImageManager(new Driver());
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        if ($request->hasFile('image')) {
            User::find(Auth::user()->id)->update([
                // $newname = Auth::user()->name . '-'.Str::random(5).'-'.$request->file('image')->getClientOriginalExtension();
                // $image = $manager->read('images/example.jpg');
                'image' => $request->image,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'adress' => $request->address,
            ]);
        }else{
            User::find(Auth::user()->id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'adress' => $request->address,
            ]);
        }
    }

    public function addAdmin(){
        return view('dashboard.myaccount.createAdmin');
    }
    public function storeAdmin(Request $request){
        //
    }

}
