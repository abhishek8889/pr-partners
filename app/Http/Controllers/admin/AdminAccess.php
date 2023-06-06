<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User};
use Hash;

class AdminAccess extends Controller
{
    //
    public function index(){
        $AdminDetails = User::where('is_admin',1)->first();
        return view('admin.adminaccess.index',compact('AdminDetails'));
    }
    public function update(Request $request){
        if($request->email){
            User::where('email',$request->oldemail)->update(['email'=>$request->email]);
        }
        if($request->password){
            User::where('email',$request->oldemail)->update(['password'=>Hash::make($request->password)]);
        }
        return response()->json('Admin details has been updated',);
    }
}
