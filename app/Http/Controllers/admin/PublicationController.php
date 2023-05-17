<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleType;
use App\Models\Genre;
use App\Models\Region;

class PublicationController extends Controller
{
    //
    public function index(){
        return view('admin.publications.index');
    }
    public function publicationInsert(){
        $article_types = ArticleType::all();
        $genre_list = Genre::all();
        $region_list = Region::all();
        return view('admin.publications.insert',compact('article_types','genre_list','region_list'));
    }
    public function addProc(Request $request){
        return response()->json($request->all());
    }
}
