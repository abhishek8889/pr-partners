<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Press_release};


class PressReleaseController extends Controller
{
    //
    public function index(){
        $press_release = Press_release::orderBy('created_at','desc')->get();
        return view('admin.pressRelease.index',compact('press_release'));
    }
    public function addPressRelease(Request $request){
        $request->validate([
            'title' => 'required',
            'price' => 'required',
        ]);
        $pressRelease = new Press_release;
        $pressRelease->title = $request->title;
        $pressRelease->price = $request->price;
        $pressRelease->save();
        return response()->json('Publication has been added');
    }

    public function updatePressRelease(Request $request){
        $request->validate([
            'price' => 'required',
            'title' => 'required',
        ]);
        $packageBundel = Press_release::find($request->id);
        $packageBundel->title = $request->title;
        $packageBundel->price = $request->price;
        $packageBundel->update();
        return response()->json('Your Press Release has been Updated successfully');
    }
    public function remove(Request $request){
        Press_release::where('id', $request->remove_id)->delete();
        return response()->json('Press Release deleted successfully');
    }
}
