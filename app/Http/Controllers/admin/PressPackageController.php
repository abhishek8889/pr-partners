<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ PressPackageCategory,PackageBundle,Publication};

class PressPackageController extends Controller
{
    //
    public function index(){
        $packageCategorys = PressPackageCategory::orderBy('created_at','desc')->get();
        $publications = Publication::with('article_type','region')->get()->toArray();
        return view('admin.press_package.index',compact('packageCategorys','publications'));
    }
    
    public function addPackageBundle(Request $request){
        $request->validate([
            'packageCategory' => 'required',
            'price' => 'required',
            'retail_price' => 'required',
            'title' => 'required',
            'publication_id' => 'required',
        ]);
        $packageBundle = new PackageBundle;
        $packageBundle->press_package_category_id = $request->packageCategory;
        $packageBundle->title = $request->title;
        $packageBundle->bundle_price = $request->price;
        $packageBundle->retail_price = $request->retail_price;
        $packageBundle->publication_id = json_encode($request->publication_id);
        $packageBundle->save();
        return response()->json(json_encode('Your package has been added to the press package'));
    }
    public function updatepressPackage(Request $request,$id){
        if($id){
            if(PackageBundle::where('id',$id)->exists()){
                $pressBundel = PackageBundle::where('id',$id)->first();
                $packageCategorys = PressPackageCategory::all();
                $publications = Publication::with('article_type','region')->get()->toArray();
                return view('admin.press_package.update',compact('packageCategorys','publications','pressBundel'));
            }else{
                return redirect()->back()->with('error', 'No such package exists with that id');
            }
        }else{
            return redirect()->back()->with('error', 'Failed to update press package');
        }
    }
    public function updatePackageBundle(Request $request){
        $request->validate([
            'packageCategory' => 'required',
            'price' => 'required',
            'retail_price' => 'required',
            'title' => 'required',
            'publication_id' => 'required',
        ]);
        $packageBundle = PackageBundle::find($request->id);
        $packageBundle->press_package_category_id = $request->packageCategory;
        $packageBundle->title = $request->title;
        $packageBundle->bundle_price = $request->price;
        $packageBundle->retail_price = $request->retail_price;
        $packageBundle->publication_id = json_encode($request->publication_id);
        $packageBundle->update();
        return response()->json('Your package has been Updated successfully');
    }
    public function packageCategory(){
        $packageCategorys = PressPackageCategory::orderBy('created_at','desc')->get();
        return view('admin.press_package.packageCategory',compact('packageCategorys'));
    }
    public function addPackageCategory(Request $request){
        if ($request->has('edit_id')) {
            $request->validate([
                'name' => 'required|unique:press_package_category,name,'.$request->edit_id,
            ]);
            PressPackageCategory::where('id', $request->edit_id)
                ->update([
                    'name' => $request->name
                    ]);
            return response()->json('Package Category updated successfully');
        }
        if ($request->has('name')) {
            $request->validate([
                'name' => 'required|unique:press_package_category'
            ]);
            $genre = new PressPackageCategory();
            $genre->name = $request->name;
            $genre->save();
            
            return response()->json('Package Category added successfully');
        }
        if ($request->has('remove_id')) {
            PressPackageCategory::where('id', $request->remove_id)->delete();
            return response()->json('Package Category deleted successfully');
        }
        return response()->json('Invalid error found !');
    }


    public function packageList(Request $request){
        $packageBundles = PackageBundle::orderBy('created_at','desc')->with('category')->get()->toArray();
        return view('admin.press_package.packageList',compact('packageBundles'));
    }

    public function remove(Request $request){
        PackageBundle::where('id', $request->remove_id)->delete();
        return response()->json('Your Package Bundel deleted successfully');
    }
}
