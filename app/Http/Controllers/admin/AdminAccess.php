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
        $email = $request->email;
        $password = $request->password;   
            if (empty($email) && empty($password)) {
                return response()->json('Nothing to update');
            }
        $updates = [];
            if (!empty($email)) {
                $updates['email'] = $email;
            }
            if (!empty($password)) {
                $updates['password'] = Hash::make($password);
            }
        User::where('email', $request->oldemail)->update($updates);
        return response()->json('Admin details has been updated');
    }

}
