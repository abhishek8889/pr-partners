<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleType;
use App\Models\Genre;
class PublicationController extends Controller
{
    //
    public function index(){
        return view('admin.publications.index');
    }
    public function publicationInsert(){
        $article_types = ArticleType::all();
        $genre_list = Genre::all();
        return view('admin.publications.insert',compact('article_types','genre_list'));
    }
}
