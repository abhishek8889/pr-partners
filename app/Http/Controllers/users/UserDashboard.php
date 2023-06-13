<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\PressPackageCategory;
use App\Models\Press_release;
use App\Models\Genre;
use App\Models\ArticleType;
use App\Models\Region;
use App\Models\Service;

class UserDashboard extends Controller
{
    public function downloadQuestionnaire(Request $request){
        return response()->download(public_path('Questionnaire/prQuestionnaire.docx'));
    }
    public function index(){
        $publication_data = Publication::with('article_type','region')->get()->toArray();
        
        $press_packages = PressPackageCategory::with('package')->get();

        $other_services = Service::get();

        $press_release = Press_release::get();

        $genres_filter = Genre::get();
      
        $article_filter = ArticleType::get();

        $region_filter = Region::get();
        $priceRange = Publication::max('price');
        return view('users.all_publication',compact('priceRange','publication_data','press_packages','press_release','genres_filter','article_filter','region_filter','other_services'));
    }
    public function genreName(Request $request){
        $Publication = Publication::where('id',$request->id)->first();
         $genre = json_decode($Publication->genre); 
            $genreNames = Genre::whereIn('id', $genre)->pluck('name')->toArray();
             return response()->json($genreNames);
    }
    public function filterData(Request $request){
    // old code is here 
                            // $query = Publication::with('article_type', 'region');

                            //     // Filter by region
                            //     $regionId = $request->input('region_id');
                            //         if ($regionId !== null) {
                            //             $query->whereHas('region', function ($regionQuery) use ($regionId) {
                            //                 $regionQuery->whereIn('id', explode(',', $regionId));
                            //             });
                            //         }
                            //     // $regionId = $request->input('region_id');
                            //     // if ($regionId !== null) {
                            //     //     $query->whereHas('region', function ($regionQuery) use ($regionId) {
                            //     //         $regionQuery->whereIn('id', explode(',', $regionId));
                            //     //     });
                            //     // }

                            //     // Filter by publication name
                            //     $publicationName = $request->input('publicationname');
                            //     if ($publicationName !== null) {
                            //         $query->where('title', 'like', $publicationName . '%');
                            //     }

                            //     // Filter by genre
                            //     // $genreId = $request->input('genre_id');
                            //     // if ($genreId !== null) {
                            //     //     $query->whereJsonContains('genre', $genreId);
                            //     // }
                            //     $genreId = $request->input('genre_id');
                            //     if ($genreId !== null) {
                            //         $genreIds = explode(',', $request->input('genre_id'));
                            //         foreach ($genreIds as $genreI_d) {
                            //             $query->where(function ($query) use ($genreI_d) {
                            //                 $query->whereJsonContains('genre', $genreI_d);
                            //             });
                            //         }
                            //     }


                            //     // Filter by article type
                            //     $articleId = $request->input('article_id');
                            //     if ($articleId !== null) {
                            //         $query->where('article_type', $articleId);
                            //     }

                            //     // Filter by price range
                            //     $minPrice = $request->input('minprice');
                            //     $maxPrice = $request->input('maxprice');

                            //     if ($minPrice !== null && $maxPrice !== null) {
                            //         $query->whereBetween('price', [$minPrice, $maxPrice]);
                            //     } elseif ($minPrice !== null) {
                            //         $query->where('price', '>=', $minPrice);
                            //     } elseif ($maxPrice !== null) {
                            //         $query->where('price', '<=', $maxPrice);
                            //     }

                            //     // $minPrice = $request->input('minprice');
                            //     // if ($minPrice !== null) {
                            //     //     $query->where('price', '>=', $minPrice);
                            //     // }

                            //     // $maxPrice = $request->input('maxprice');
                            //     // if ($maxPrice !== null) {
                            //     //     $query->where('price', '<=', $maxPrice);
                            //     // }

                            //     // Sort by price
                            //     $sortedVal = $request->input('sortedval');
                            //     if ($sortedVal === 'dsc') {
                            //         $query->orderBy('price', 'desc');
                            //     } elseif ($sortedVal === 'asc') {
                            //         $query->orderBy('price', 'asc');
                            //     } elseif ($sortedVal === 'tatasc'){
                            //         $query->orderBy('tat', 'asc');

                            //     }elseif ($sortedVal === 'tatdsc'){
                            //         $query->orderBy('tat', 'desc');

                            //     }elseif ($sortedVal === 'daasc'){
                            //         $query->orderBy('domain_authority', 'asc');

                            //     }elseif ($sortedVal === 'dadsc'){
                            //         $query->orderBy('domain_authority', 'desc');

                            //     }

                            //     $results = $query->get();

                            //     return response()->json($results);

                            //         }
    //old code end here
    //NEW CODE START FROM HERE 
    // $data = Publication::where('id',1)->first();
    //     return response()->json($data);
        // $query = Publication::with('article_type', 'region');
        //                         // return response()->json($request->all());
        //                         // Filter by region
        //                         $regionId = $request->input('region_id');
        //                             if ($regionId !== null) {
        //                                 // $query->whereHas('region', function ($regionQuery) use ($regionId) {
        //                                 //     $regionQuery->whereIn('id', explode(',', $regionId));
        //                                 // });
        //                                 $query->whereHas('region', function ($regionQuery) use ($regionId) {
        //                                     $regionQuery->whereIn('id', $regionId);
        //                                 });
        //                             }
        //                         // $regionId = $request->input('region_id');
        //                         // if ($regionId !== null) {
        //                         //     $query->whereHas('region', function ($regionQuery) use ($regionId) {
        //                         //         $regionQuery->whereIn('id', explode(',', $regionId));
        //                         //     });
        //                         // }

        //                         // Filter by publication name
        //                         $publicationName = $request->input('publicationname');
        //                         if ($publicationName !== null) {
        //                             $query->where('title', 'like', $publicationName . '%');
        //                         }

        //                         // Filter by genre
        //                         // $genreId = $request->input('genre_id');
        //                         // if ($genreId !== null) {
        //                         //     $query->whereJsonContains('genre', $genreId);
        //                         // }
        //                             //new Code to get all genre information Where The Gerne Id exist
        //                         // if ($request->genre_id !== null) {
        //                         //     $genre_id = $request->genre_id;
        //                         //     foreach ($genre_id as $gid) {
        //                         //         $query->whereIn('genre', 'like', '%"'.$gid.'"%');
        //                         //     }
        //                         // }

                                
        //                         // if ($request->genre_id !== null) {
        //                         //     $genre_id = $request->genre_id;
        //                         //     $query->whereIn('genre', $genre_id);
        //                         // }
                                
        //                         // $query->whereHas('genre', function ($genreQuery) use ($genre_id) {
        //                             //     $genreQuery->whereIn('id', $genre_id);
        //                             // });
        //                         if ($request->genre_id !== null) {
        //                             $genre_id = $request->genre_id;
        //                             $query->where(function ($query) use ($genre_id) {
        //                                 foreach ($genre_id as $gid) {
        //                                     $query->orWhereJsonContains('genre', $gid);
        //                                 }
        //                             });
        //                         }
        //                         // This code only get those gernre where Id exist in same column
        //                         // $genreId = $request->input('genre_id');
        //                         // if ($genreId !== null) {
        //                         //     $genreIds = $request->input('genre_id');
        //                         //     foreach ($genreIds as $genreI_d) {
        //                         //         $query->where(function ($query) use ($genreI_d) {
        //                         //             $query->whereJsonContains('genre', $genreI_d);
        //                         //         });
        //                         //     }
        //                         // }


        //                         // Filter by article type
        //                         // $articleId = $request->input('article_id');
        //                         // if ($articleId !== null) {
        //                         //     $query->where('article_type', $articleId);
        //                         // }

        //                         // Filter by price range
        //                         $minPrice = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $request->input('minp'));
                                
        //                         // $minPrice = $request->input('minprice');
        //                         // $maxPrice = $request->input('maxprice');
        //                         $maxPrice = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $request->input('maxp'));
        //                         // if($minPrice == 0){
        //                         //     $minPrice = 1;
        //                         // }  
        //                         if ($minPrice !== null && $maxPrice !== null) {
        //                             $query->whereBetween('price', [$minPrice, $maxPrice]);
        //                         } elseif ($minPrice !== null) {
        //                             $query->where('price', '>=', $minPrice);
        //                         } elseif ($maxPrice !== null) {
        //                             $query->where('price', '<=', $maxPrice);
        //                         }

        //                         // $minPrice = $request->input('minprice');
        //                         // if ($minPrice !== null) {
        //                         //     $query->where('price', '>=', $minPrice);
        //                         // }

        //                         // $maxPrice = $request->input('maxprice');
        //                         // if ($maxPrice !== null) {
        //                         //     $query->where('price', '<=', $maxPrice);
        //                         // }

        //                         // Sort by price
        //                         $sortedVal = $request->input('sortedval');
        //                         if ($sortedVal === 'dsc') {
        //                             $query->orderBy('price', 'desc');
        //                         } elseif ($sortedVal === 'asc') {
        //                             $query->orderBy('price', 'asc');
        //                         } elseif ($sortedVal === 'tatasc'){
        //                             $query->orderBy('tat', 'asc');

        //                         }elseif ($sortedVal === 'tatdsc'){
        //                             $query->orderBy('tat', 'desc');

        //                         }elseif ($sortedVal === 'daasc'){
        //                             $query->orderBy('domain_authority', 'asc');

        //                         }elseif ($sortedVal === 'dadsc'){
        //                             $query->orderBy('domain_authority', 'desc');

        //                         }
        //                         // New query for find sponsor yes no or descrit
        //                         $sponsorVal = $request->input('sponsor');
        //                         if ($sponsorVal != null) {
        //                             $query->where('sponsored', $sponsorVal);
        //                         } 

        //                         $results = $query->get();
        //                         return response()->json($results);
        //                         // $data = array('results' => $results, 'request' => $request->all());
        //                         // return response()->json($data);
// return response()->json($request->all());
        $query = Publication::with('article_type', 'region');
        // Filter by region
        $regionId = $request->input('region_id');
            if ($regionId !== null) {
              
                $query->whereHas('region', function ($regionQuery) use ($regionId) {
                    $regionQuery->whereIn('id', $regionId);
                });
            }
        // Filter by publication name
        $publicationName = $request->input('publicationname');
        if ($publicationName !== null) {
            $query->where('title', 'like', $publicationName . '%');
        }

        if ($request->genre_id !== null) {
            $genre_id = $request->genre_id;
            $query->where(function ($query) use ($genre_id) {
                foreach ($genre_id as $gid) {
                    $query->orWhereJsonContains('genre', $gid);
                }
            });
        }
        $articleId = $request->input('article_filter');
        if ($articleId !== null) {
            // $query->where(function ($query) use ($articleId) {
            //     foreach ($genre_id as $gid) {
            //         $query->orWhereJsonContains('genre', $gid);
            //     }
            // });
            $query->whereHas('region', function ($articleQuery) use ($articleId) {
                $articleQuery->whereIn('article_type', $articleId);
            });
        }
      // This code only get those gernre where Id exist in same column
        //                         // $genreId = $request->input('genre_id');
        //                         // if ($genreId !== null) {
        //                         //     $genreIds = $request->input('genre_id');
        //                         //     foreach ($genreIds as $genreI_d) {
        //                         //         $query->where(function ($query) use ($genreI_d) {
        //                         //             $query->whereJsonContains('genre', $genreI_d);
        //                         //         });
        //                         //     }
        //                         // }

        // Filter by price range
        $minPrice = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $request->input('minp'));
  
        $maxPrice = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $request->input('maxp'));
    
        if ($minPrice !== null && $maxPrice !== null) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        } elseif ($minPrice !== null) {
            $query->where('price', '>=', $minPrice);
        } elseif ($maxPrice !== null) {
            $query->where('price', '<=', $maxPrice);
        }

        // Sort by price
        $sortedVal = $request->input('sortedval');
        if ($sortedVal === 'dsc') {
            $query->orderBy('price', 'desc');
        } elseif ($sortedVal === 'asc') {
            $query->orderBy('price', 'asc');
        } elseif ($sortedVal === 'tatasc'){
            $query->orderBy('tat', 'asc');

        }elseif ($sortedVal === 'tatdsc'){
            $query->orderBy('tat', 'desc');

        }elseif ($sortedVal === 'daasc'){
            $query->orderBy('domain_authority', 'asc');

        }elseif ($sortedVal === 'dadsc'){
            $query->orderBy('domain_authority', 'desc');

        }
        // Filter by article type
        // $articleId = $request->input('article_filter');
        // if ($articleId !== null) {
        //     $query->where('article_type', $articleId);
        // }
      
        // New query for find sponsor yes no or descrit
        // $sponsorVal = $request->input('sponsor');
        // if ($sponsorVal != null) {
        //     $query->where('sponsored', $sponsorVal);
        // } 

        $results = $query->get();
        return response()->json($results);

    }
}