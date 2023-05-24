<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAccessToken extends Controller
{
    public function index(){
        return view('admin.useraccess.index');
    }
    public function creatproc(){

    }
}
