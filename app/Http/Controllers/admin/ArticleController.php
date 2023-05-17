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
        $total_type = ArticleType::get();
        $response = array('total'=> count($total_type),'article'=>$article);
        return response()->json($response);
    }
    public function action(Request  $req){
        if($req->deleteid){
        $remove = ArticleType::find($req->deleteid)->delete();
        return response()->json($remove);
        }elseif($req->editid){
            $req->validate([
                'type' => 'required|unique:article_types,type,'.$req->type
            ],[
                'type.required' => 'This article type field is required',
                'type.unique' => 'This article type must be unique'
            ]);
            $article = ArticleType::find($req->editid);
            $article->type = $req->type;
            $article->update();
            return response()->json($article);
        }
    }
}
