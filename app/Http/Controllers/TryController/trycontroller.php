<?php

namespace App\Http\Controllers\TryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\TryTable;
use App\Models\Publication;

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
 
        //  echo '<pre>';
        //  print_r($data);
        //  echo '</pre>';

         for($i = 0; $i < count($data); $i++){
            // print_r($data[$i]['publication']);
            // print_r($data[$i]['countryRegion']);
                        // $try = new Publication;
                        // $try->title = $data[$i]['publication'];
                        // $try->url = $data[$i]['url'];
                        // $try->price = $data[$i]['price'];
                        // $try->domain_authority = $data[$i]['domainAuthority'];
                        // $try->tat = $data[$i]['tat'];
                        // $try->genre = json_encode($data[$i]['elements']);
                        // $try->article_type = $data[$i]['articleType'];
                        // $try->region = $data[$i]['countryRegionId'];
                        // $try->save();

         }
        
         echo 'code is comment';

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
