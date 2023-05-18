<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Genre;
use Carbon\Carbon;
use DB;

class GenreController extends Controller
{
    //
    public function index(){
        // $genre = Genre::all();
        $genres = Genre::orderBy('created_at','desc')->paginate(10);
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
                Genre::where('id', $request->remove_id)->delete();
                return response()->json('Genre deleted successfully');
            }
            
            
        }

    
    
}
