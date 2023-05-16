<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index(){
        return view('authentication.login');
    }
    public function adminLogin(){
        return view('authentication.admin_login');
    }
}
