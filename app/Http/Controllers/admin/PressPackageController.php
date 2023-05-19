<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ PressPackageCategory,PackageBundle,Publication};

class PressPackageController extends Controller
{
    //
    public function index(){
        $packageCategorys = PressPackageCategory::all();
        $publications = Publication::with('article_type','region')->get()->toArray();
        return view('admin.press_package.index',compact('packageCategorys','publications'));
    }
    public function addPackageBundle(Request $request){
        $request->validate([
            'packageCategory' => 'required',
            'price' => 'required',
            'retail_price' => 'required',
            'title' => 'required',
        ]);
        $packageBundel = new PackageBundle;
        $packageBundel->press_package_category_id = $request->packageCategory;
        $packageBundel->title = $request->title;
        $packageBundel->bundle_price = $request->price;
        $packageBundel->retail_price = $request->retail_price;
        $packageBundel->publication_id = json_encode($request->publication_id);
        $packageBundel->save();
        return response()->json(json_encode($request->all()));
    }

    public function packageCategory(){
        $packageCategorys = PressPackageCategory::all();
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
        $packageBundles = PackageBundle::with('category')->get()->toArray();
        return view('admin.press_package.packageList',compact('packageBundles'));
    }
}
