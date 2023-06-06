<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\ArticleType;
use App\Models\Region;
use App\Models\Publication;

class UploadCsv extends Controller
{
   public function  index(){
    return view('admin.uploadcsv.index');
   }

   public function uploadproc(Request $request){
     
    $request->validate([
      'file' => 'required|file|mimes:csv'
    ]);
    $file = $request->file('file');
    $filename = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $tempPath = $file->getRealPath();
    $fileSize = $file->getSize();
    $mimeType = $file->getMimeType();
   
    $valid_extension = array("csv");
    $maxFileSize = 2097152; 
    if(in_array(strtolower($extension),$valid_extension)){
      if($fileSize <= $maxFileSize){
         $file->move('csvfile',$filename);
         $filepath = public_path("csvfile/".$filename);
         $file = fopen($filepath,"r");
         $line1 = fgetcsv($file);
         $count = count($line1);
         if($count != 8){
            return response()->json(['error'=>'unable to upload data']);
         }
        
       $data = array();
         while (($line = fgetcsv($file)) !== false) {
            foreach ($line as $cell) {
                  //   $data[] = $cell;  
                  array_push($data,$cell);
                 
            }
         }
         
         $data1 = array_chunk($data,$count);
    fclose($file);
    $isfirst = true;
    foreach($data1 as $d){
      // if($isfirst == true){
      //    $isfirst = false;
      //    continue;
      // }
            $url = $d[0];
            $title = $d[1];
            // $img_url = $d[8];
            //getprice
            $result_list_price = str_replace(',', '', $d[2]);
            $result_list_price_update = str_replace('ASK', '0', $result_list_price);
            $price = str_replace('$', '', $result_list_price_update);
            
            //domain_authority
            $domain_authority = $d[3];
            //tat
            $tat = $d[4];
            //generes
            $genere_name_result = str_replace(' ', '', $d[5]);
            $result_generes = explode("/",$genere_name_result);
            $genre_name = array_filter($result_generes);
            $genre = array();
            foreach($genre_name as $gn){
               $genre_data = Genre::where('name',$gn)->first();
              if($genre_data){
               array_push($genre,"$genre_data->id");
           
              }else{
              $genre_add = new Genre();
              $genre_add->name = $gn;
              $genre_add->save();
              array_push($genre,"$genre_add->id");
              }
            }
         // print_r(json_encode($genre));
         
         //article_types
         $article_data = ArticleType::where('type',$d[6])->first();
         if($article_data){
            $article_id = $article_data->id;
         }else{
            $article_add = new ArticleType();
            $article_add->type = $d[6];
            $article_add->save();
            $article_id = $article_add->id;
         }
         // echo $article_id;
         // echo '<br>';

         //country
         $country_data = Region::where('country_name',$d[7])->first();
         if($country_data){
            $region = $country_data->id;
         }else{
            $region_add = new Region();
            $region_add->country_name = $d[7];
            $region_add->save();
            $region = $region_add->id;
         }
         // echo $region;
         // echo '<br>';

         $publication_add =  new Publication();
         $publication_add->url = $url;
         // $publication_add->img_url =  $img_url;
         $publication_add->title = $title;
         $publication_add->price = $price;
         $publication_add->domain_authority = $domain_authority;
         $publication_add->tat = $tat;
         $publication_add->genre = json_encode($genre);
         $publication_add->article_type = $article_id;
         $publication_add->region = $region;
         $publication_add->save();

    }
         $response = array('success'=>'successfully uploaded data');
         return response()->json($response);
      }
      else{
         $response = array('error'=>'file is very large size');
         return response()->json($response);
      }
   }else{
         $response = array('error'=>'Please upload CSV format file');
         return response()->json($response);
   }
   
   }
}
