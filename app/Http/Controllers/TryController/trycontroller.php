<?php

namespace App\Http\Controllers\TryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class trycontroller extends Controller
{
    public function index(){
        return view('Trycode.trycode');
     }
    
     public function adddata(Request $request)
     {
         $jsonData = $request->data;
         // dd($data);
         $data = json_decode($jsonData, true);
 
         echo '<pre>';
        //  print_r($data);
         echo '</pre';
         foreach ($data as $d){
             // echo $d['url'];
             // echo $d['publication'];
             // echo $d['price'];
             // echo $d['domainAuthority'];
             // echo $d['tat'];
             echo $d['genre'];
             // echo $d['articleType'];
             // echo $d['countryRegion'];
         }
         
     }
}
