<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Publication, Service};
class ServiceController extends Controller
{
    //
    public function index(){
        $services = Service::all();
        return view('admin.Services.index',compact('services'));
    }
    public function insertService(){
        $publications = Publication::with('article_type','region')->get()->toArray();
        return view('admin.Services.insert',compact('publications'));
    }
    public function addService(Request $request){
        $request->validate([
            'title' => 'required',
            'publication_id' => 'required',
            
        ]);
        $service = new Service;
        $service->title = $request->title;      
        $service->publication_id = json_encode($request->publication_id);
        $service->save();
        return response()->json('Other Services has been added.');
    }
    public function updateService(Request $request,$id){
        $service = Service::where('id',$id)->first();
        $publications = Publication::with('article_type','region')->get()->toArray();
        return view('admin.Services.update',compact('publications','service'));
    }
    public function ServiceUpdate(Request $request){
        $request->validate([
            'title' => 'required',
            'publication_id' => 'required',
            
        ]);
        $service = Service::find($request->id);
        $service->title = $request->title;      
        $service->publication_id = json_encode($request->publication_id);
        $service->update();
        return response()->json('Other Services has been updated.'); 
    }

    public function remove(Request $request){
        Service::where('id', $request->remove_id)->delete();
        return response()->json('Other Service deleted successfully');
    }
}
