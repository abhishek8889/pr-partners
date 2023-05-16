<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthenticationController extends Controller
{
    public function index(){
        return view('authentication.login');
    }
    public function adminLogin(){
        return view('authentication.admin_login');
    }
    public function adminLoginProc(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password' => $request->password])){
                return redirect('/admin-dashboard')->with('success','Welcome to AdminDashboard');
        }else{
                return redirect()->back()->with('error','Failed to login! Check your credentials plz');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/admin-login')->with('success',"You have logged out succesfully");
    }
}
