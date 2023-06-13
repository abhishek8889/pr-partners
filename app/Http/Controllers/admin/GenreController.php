<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Genre;
use App\Models\Publication;
use Carbon\Carbon;
use DB;

class GenreController extends Controller
{
    //
    public function index(){
     
       
        // $genre = Genre::all();
        $genres = Genre::orderBy('created_at','desc')->get();
        return view('admin.Genre.index',compact('genres'));
    }
    public function genreAdd(Request $request)
        {
            // return response()->json($request->all());
            if ($request->has('edit_id')) {
                $request->validate([
                    'name' => 'required|unique:genres,name,'.$request->edit_id,
                ]);
                Genre::where('id', $request->edit_id)
                    ->update([
                        'name' => $request->name
                        ]);
                return response()->json('Genre updated successfully');
            }
            if ($request->has('name')) {
                $request->validate([
                    'name' => 'required|unique:genres'
                ]);
                $genre = new Genre();
                $genre->name = $request->name;
                $genre->save();
                
                return response()->json('Genre added successfully');
            }
            
            if ($request->has('remove_id')) {
                $publication = Publication::whereJsonContains('genre',$request->remove_id)->get();
                foreach($publication as $p){
                    $genre = json_decode($p->genre);
                    $data = array();
                    foreach($genre as $g){
                        if($g == $request->remove_id){
                            continue;
                        }
                        array_push($data,$g);
                    }
                    $real_genre = json_encode($data);
                    $publication_update = Publication::find($p->id);
                    $publication_update->genre = $real_genre;
                    $publication_update->update();
                }
                Genre::where('id', $request->remove_id)->delete();
                return response()->json('Genre deleted successfully');
            }
            
            
        }

    
    
}
