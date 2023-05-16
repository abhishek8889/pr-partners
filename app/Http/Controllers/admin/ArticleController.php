<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleType;

class ArticleController extends Controller
{
    public function index(){
        $article_data = ArticleType::get();
        return view('admin.article.index',compact('article_data'));
    }
    public function articleAdd(Request $req){
        $req->validate([
            'type' => 'required|unique:article_types'
        ],[
            'type.required' => 'This article type field is required',
            'type.unique' => 'This article type must be unique'
        ]);
        $article = new ArticleType;
        $article->type = $req->type;
        $article->save();
        return response()->json($article);
    }
    public function action(Request  $req){
        $remove = ArticleType::find($req->editid)->delete();
        return response()->json('successfully deleted article type');
    }
}
