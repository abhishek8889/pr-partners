<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleType;
use App\Models\Genre;
use App\Models\Region;
use App\Models\Publication;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
class PublicationController extends Controller
{
    //
    public function index(){
        // $publications = Publication::all();
        $publications = Publication::with('article_type','region')->get()->toArray();
        return view('admin.publications.index',compact('publications'));
    }
    public function publicationInsert(){
        $article_types = ArticleType::all();
        $genre_list = Genre::all();
        $region_list = Region::all();
        return view('admin.publications.insert',compact('article_types','genre_list','region_list'));
    }
    public function addPublication(Request $req){
        $req->validate([
            'country_name' => 'required',
            'article_type' => 'required',
            'genre_list' => 'required',
            'title' => 'required',
            'url' => 'required',
            'price' => 'required',
            'domain_authority' => 'required',
            'tat' => 'required',
        ]);
        $publication = new Publication;
        $publication->title = $req->title;
        $publication->url = $req->url;
        $publication->price = $req->price;
        $publication->domain_authority = $req->domain_authority;
        $publication->tat = $req->turn_around_time;
        $publication->genre = json_encode($req->genre_list);
        $publication->article_type = $req->article_type;
        $publication->region = $req->country_name;
        $publication->save();
        return response()->json('Publication has been added');
    }
    public function addProc(Request $request){
        return response()->json($request->all());
    }
}
