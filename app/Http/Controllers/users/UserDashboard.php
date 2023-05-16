<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboard extends Controller
{
    public function index(){
        return view('users.all_publication');
    }
}
