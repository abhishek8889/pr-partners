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
    public function userLoginProc(Request $request){
        if(Auth::attempt(['email'=>'prpartners@gmail.com','password' => $request->password])){
            return redirect('/user-dashboard')->with('success','Welcome to UserDashboard');
    }else{
            return redirect()->back()->with('error','Failed to login! Please check your password.');
    }
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
                return redirect()->back()->with('error','Failed to login! Check your credentials please');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/admin-login')->with('success',"You have logged out succesfully");
    }
    public function userlogout(){
        Auth::logout();
        return redirect('/')->with('success',"You have logged out succesfully");
    }
}
