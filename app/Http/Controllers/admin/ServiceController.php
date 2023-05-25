<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Publication, Service};
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServiceController extends Controller
{
    //
    public function index(){
        $services = Service::orderBy('created_at','desc')->get();
        return view('admin.Services.index',compact('services'));
    }
    public function insertService(){
        $publications = Publication::with('article_type','region')->get()->toArray();
        return view('admin.Services.insert',compact('publications'));
    }
    public function addService(Request $request){
        $request->validate([
            'title' => 'required',
            'services' => 'required',
            
        ]);
        $service = new Service;
        $service->title = $request->title;      
        $service->publication_id = json_encode($request->services);
        $service->save();
        return response()->json('Your services have been added');
    }
    public function updateService(Request $request, $id)
    {
        try {
            $_id = \Crypt::decrypt($id);
            $service = Service::findOrFail($_id);
            $publications = Publication::with('article_type', 'region')->get()->toArray();
            return view('admin.Services.update', compact('publications', 'service'));
        } catch (\Exception $e) {
            // return redirect()->back()->withError('error ', . $e->getMessage());
            return redirect()->back()->with('error',$e->getMessage());  
        }
    }
    public function ServiceUpdate(Request $request){
        $request->validate([
            'title' => 'required',
            'services' => 'required',
            
        ]);
        $service = Service::find($request->id);
        $service->title = $request->title;      
        $service->publication_id = json_encode($request->services);
        $service->update();
        return response()->json('Other Service updated successfully'); 
    }

    public function remove(Request $request){
        Service::where('id', $request->remove_id)->delete();
        return response()->json('Other Service deleted successfully');
    }
}