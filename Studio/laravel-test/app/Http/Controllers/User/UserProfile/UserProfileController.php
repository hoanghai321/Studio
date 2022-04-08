<?php

namespace App\Http\Controllers\User\UserProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
  
    public function index()
    {
        return view('user.UserProfile.EditUserProfile');
    }

    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $request->validate([
            'image' => 'required|image:jpg,png,gif',
        ]);

        $image_upload0 = $request->image->getClientOriginalName();
        $request->image->move(public_path('images/AccountImage/'), $image_upload0);

        $add = DB::table('users')->where('id', $id)->update([
            'image' => $image_upload0,
        ]);
        if($add==true){
            return redirect()->back();
        }
        else{
            abort(419);
        }
    }

    public function update2(Request $request)
    {
        $id = Auth::user()->id;

        

        $add = DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address
        ]);
        return redirect()->back();
    }

}
