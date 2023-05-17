<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;


class RegionController extends Controller
{
    public function index(){
        $regions = Region::get();
        return view('admin.regions.index',compact('regions'));
    }
    public function addProc(Request $request){
        $request->validate([
            // 'country_code' => 'required|unique:regions',
            'country_name' => 'required|unique:regions',
        ],[
            // 'country_code.required' => 'Country code field is required',
            // 'country_code.unique' => 'Country code should be unique',
            'country_name.required' => 'Country name field is required',
            'country_name.unique' => 'Country name should be unique',
        ]);
            $region = new Region;
            $region->country_name = $request->country_name;
            $region->country_code = $request->country_code;
            $region->save();
            $region_total = Region::get();
            $response = array('total' => count($region_total),'region' => $region);
        return response()->json($response);
    }
        public function action(Request $request){
            if($request->deleteid){
                $deletedata = Region::find($request->deleteid)->delete();
                return response()->json($request->all());
            }
            if($request->editid){
                
                $request->validate([
                    // 'country_code' => 'required|unique:regions,country_code,'.$request->editid,
                    'country_name' => 'required|unique:regions,country_name,'.$request->editid
                ],[
                    // 'country_code.required' => 'Country code field is required',
                    // 'country_code.unique' => 'Country code should be unique',
                    'country_name.required' => 'Country name field is required',
                    'country_name.unique' => 'Country name should be unique',
                ]);

                $region = Region::find($request->editid);
                $region->country_name = $request->country_name;
                $region->country_code = $request->country_code;
                $region->update();
                return response()->json($request->all());
            }
        }
}
