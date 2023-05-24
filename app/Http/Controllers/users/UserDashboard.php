<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\PressPackageCategory;
use App\Models\Press_release;
use App\Models\Genre;

class UserDashboard extends Controller
{
    public function index(){
        $publication_data = Publication::with('article_type','region')->get()->toArray();
        
        // dd($publication_data);
        $press_packages = PressPackageCategory::with('package')->get();
    //    dd($press_packages);
        $press_release = Press_release::get();

        $genres_filter = Genre::get();
      
        return view('users.all_publication',compact('publication_data','press_packages','press_release','genres_filter'));
    }
}
