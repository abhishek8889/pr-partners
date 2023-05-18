<?php

namespace App\Http\Controllers\TryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class trycontroller extends Controller
{
    public function index(){
        $genre = Genre::all();
        return view('Trycode.trycode',compact('genre'));
     }
    
     public function adddata(Request $request)
     {
         $jsonData = $request->data;
         // dd($data);
         $data = json_decode($jsonData, true);
 
         echo '<pre>';
         print_r($data);
         echo '</pre>';
         
        //  $genredata = [];
        //  $genre = Genre::all();
        //  for($i = 0; $i < count($data); $i++){
        //     print_r($data[$i]['genre']);
        //     echo '<br>';
        //     $genredata[] = explode('/',$data[$i]['genre']);
        //     die();

        //  }
        //  foreach($genre as $g){
        //     echo $g->name;
        //     echo $g->id;
        //     echo '<br>';
        //  }
        //  echo '<hr><br>';
        //  echo '<pre>';

        //  print_r($genredata);
        //  echo '</pre>';

     }
    // public function adddata(Request $request)
    // {
    //     $jsonData = $request->data;
    //     $data = json_decode($jsonData, true);
    //     echo '<pre>';
    //     print_r($data);
    //     echo '</pre';
    
    //     // $uniqueGenres = [];
    
    //     // foreach ($data as $item) {
    //     //     $genres = explode("/", $item["genre"]);
    //     //     foreach ($genres as $genre) {
    //     //         // echo $genre;
    //     //         if (!in_array($genre, $uniqueGenres)) {
    //     //             $uniqueGenres[] = $genre;
    //     //         }
    //     //     }
    //     // }
    //     // echo '<pre>';
    //     // print_r($uniqueGenres);
    //     // echo '</pre>';
    
    // }
    
    
    
}
