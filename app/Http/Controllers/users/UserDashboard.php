<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\PressPackageCategory;
use App\Models\Press_release;
use App\Models\Genre;
use App\Models\ArticleType;
use App\Models\Region;
use App\Models\Service;

class UserDashboard extends Controller
{
    public function index(){
        $publication_data = Publication::with('article_type','region')->get()->toArray();
        
        $press_packages = PressPackageCategory::with('package')->get();

        $other_services = Service::get();

        $press_release = Press_release::get();

        $genres_filter = Genre::get();
      
        $article_filter = ArticleType::get();

        $region_filter = Region::get();
    
        return view('users.all_publication',compact('publication_data','press_packages','press_release','genres_filter','article_filter','region_filter','other_services'));
    }
}
