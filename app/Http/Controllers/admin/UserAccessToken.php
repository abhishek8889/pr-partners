<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserAccessToken extends Controller
{
    public function index(){
        return view('admin.useraccess.index');
    }
    public function creatproc(Request $request){
        $request->validate([
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);
        $password = Hash::make($request->password);
        $user = User::where('email','prpartners@gmail.com')->first();
        if($user){
            $userdata = User::find($user->id);
            $userdata->password = $password;
            $userdata->update();
            $resposne = 'Successfully updated user access token'; 
        }else{
            $userdata = new User;
            $userdata->name = 'pr_parnters';
            $userdata->email = 'prpartners@gmail.com';
            $userdata->password = $password;
            $userdata->is_admin = 0;
            $userdata->save();
            $resposne = 'Successfully created user access token';
        }
        return response()->json($resposne);

    }
}
