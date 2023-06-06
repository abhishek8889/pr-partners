<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Genre,Region,Publication,ArticleType};
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class PublicationController extends Controller
{
    //
    public function index(){
        try {

            $publications = Publication::with('article_type','region')->orderBy('created_at','desc')->get()->toArray();
            return view('admin.publications.index',compact('publications'));
            
        } catch (\Exception $e) {

            return redirect()->back()->with('error' . $e->getMessage());

        }
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
            'turn_around_time' => 'required',
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

    public function updatePublication(Request $req,$id){
        // if($id){
            //     if(Publication::where('id',$_id)->exists()){
           try {

                $_id = \Crypt::decrypt($id);
                $publication = Publication::with('article_type','region')->where('id',$_id)->first()->toArray();
                $article_types = ArticleType::all();
                $genre_list = Genre::all();
                $region_list = Region::all();
                return view('admin.publications.update',compact('article_types','genre_list','region_list','publication'));
            
            } catch (\Exception $e) {

                return redirect()->back()->with('error',$e->getMessage());  
                
            }
        //     }else{
        //         return redirect()->back()->with('error', 'Failed to find publication !');
        //     }
        // }else{
        //     return redirect()->back()->with('error','Failed to update publication');
        // }
    }

    public function publicationUpdate(Request $req){
        $req->validate([
            'country_name' => 'required',
            'article_type' => 'required',
            'genre_list' => 'required',
            'title' => 'required',
            'url' => 'required',
            'price' => 'required',
            'domain_authority' => 'required',
            'turn_around_time' => 'required',
        ]);
        $publication = Publication::find($req->id);
        $publication->title = $req->title;
        $publication->url = $req->url;
        $publication->price = $req->price;
        $publication->domain_authority = $req->domain_authority;
        $publication->tat = $req->turn_around_time;
        $publication->genre = json_encode($req->genre_list);
        $publication->article_type = $req->article_type;
        $publication->region = $req->country_name;
        $publication->update();
        return response()->json('Publication data updated successfully');
        // return response()->json($publication);
    }

    public function removePublication(Request $req){
        if($req->has('remove_id')){
        Publication::where('id', $req->remove_id)->delete();
        return response()->json('Publication deleted successfully');
        }
        if($req->has('remove_data')){

            $removeIds = $req->remove_data; // Get the array of IDs

            if (!empty($removeIds) && is_null($removeIds[0])) {
                array_shift($removeIds);
            }
     
            if (!empty($removeIds)) {
                Publication::whereIn('id', $removeIds)->delete();
                return response()->json('Publication(s) deleted successfully');
            } else {
                return response()->json('No valid Data to delete');
            }

        }
    }
}