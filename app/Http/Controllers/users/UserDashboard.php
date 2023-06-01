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
    public function index(){
        $publication_data = Publication::with('article_type','region')->get()->toArray();
        
        $press_packages = PressPackageCategory::with('package')->get();

        $other_services = Service::get();

        $press_release = Press_release::get();

        $genres_filter = Genre::get();
      
        $article_filter = ArticleType::get();

        $region_filter = Region::get();
    
        return view('users.all_publication',compact('publication_data','press_packages','press_release','genres_filter','article_filter','region_filter','other_services'));
    }
    public function genreName(Request $request){
        $genreName = Genre::whereIn('id', $request->items)->pluck('name')->toArray();
        return response()->json($genreName);
    }

    public function filterData(Request $request){
        // $data = array();
        // $id = array();
        // if($request->article_id !== null){
        //     $data = explode(",",$request->article_id);
        //     foreach($data as $d){
        //        $publication_data[] = Publication::where('article_type',$d)->get('id'); 
        //     }
        //     foreach($publication_data as $publication){
        //         foreach($publication as $p){
        //             array_push($id,$p->id);
        //         }
        //     }
        // }
        // if($request->genre_id !== null){
        //     $genre_id = explode(",",$request->genre_id);
        //     foreach($genre_id as $gid){
        //     $publication_using_genre[] = Publication::where('genre','like','%"'.$gid.'"%')->get('id');
        //         }
        //         foreach($publication_using_genre as $pug){
        //             foreach($pug as $p){
        //                 array_push($id,$p->id);
        //             }  
        //         }

        // }
       
        // // if($request->publicationname !== null){
        // //     $publication_using_name = Publication::where('title','like',$request->publicationname.'%')->get('id');
        // //     foreach($publication_using_name as $pun){
        // //         array_push($id,$pun->id);
        // //     }
        // // }
        // if($request->region_id !== null){
        //     $region_id = explode(",",$request->region_id);
        //     foreach($region_id as $d){
        //         $regiondata[] = Publication::where('region',$d)->get('id'); 
        //      }
        //      foreach($regiondata as $rd){
        //          foreach($rd as $r){
        //              array_push($id,$r->id);
        //          }
        //      }
        // }
        //     $publication_id_get = array_unique($id);

        // if($request->minprice !== null || $request->maxprice !== null){
        //     $final_data = array();
        //     foreach($publication_id_get as $pig){
        //         $final_data[] = Publication::where([['title','like',$request->publicationname.'%'],['id',$pig],['price','>', $request->minprice],['price','<',$request->maxprice]])->first();
        //     }
        // }else{
        //     $final_data[] = Publication::where(['title','like',$request->publicationname.'%']);
        // }
            $query = Publication::with('article_type','region');
            if($request->publicationname !== null){
               $query->where('title','like',$request->publicationname.'%');
            }
            if($request->region_id !== null){
            $region_id = explode(",",$request->region_id);
            foreach($region_id as $rid){
                $query->orWhere('region',$rid);
            }
             }
            if($request->genre_id !== null){
                $genre_id = explode(",",$request->genre_id);
                foreach($genre_id as $gid){
                    $query->orWhere('genre','like','%"'.$gid.'"%');
                }
            }
            if($request->article_id !== null){
                $article_id = explode(",",$request->article_id);
                foreach($article_id as $aid){
                    $query->orWhere('article_type',$aid);
                }
            }
            if($request->minprice !== null){
                $query->where('price','>=',$request->minprice);
            }
            if($request->maxprice !== null){
                $query->where('price','<=',$request->maxprice);
            }
            if($request->sorted_val == 'dsc'){
               $query->orderBy('price','DESC'); 
            }elseif($request->sorted_val == 'asc'){
               $query->orderBy('price','ASC'); 
               
    //        
    // $query = Publication::with('article_type', 'region');

    //     if ($request->region_id !== null) {
    //         $region_id = explode(",", $request->region_id);
    //         $query->whereIn('region', $region_id);

    //         if ($request->publicationname !== null) {
    //             $query->where('title', 'like', $request->publicationname . '%');
    //         }

    //         if ($request->genre_id !== null) {
    //             $genre_id = explode(",", $request->genre_id);
    //             foreach ($genre_id as $gid) {
    //                 $query->orWhere('genre', 'like', '%"'.$gid.'"%');
    //             }
    //         }

    //         if ($request->article_id !== null) {
    //             $article_id = explode(",", $request->article_id);
    //             foreach ($article_id as $aid) {
    //                 $query->orWhere('article_type', $aid);
    //             }
    //         }

    //         if ($request->minprice !== null) {
    //             $query->where('price', '>', $request->minprice);
    //         }

    //         if ($request->maxprice !== null) {
    //             $query->where('price', '<', $request->maxprice);
    //         }

    //         if ($request->sortedval == 'dsc') {
    //             $query->orderBy('price', 'desc');
    //         } elseif ($request->sortedval == 'asc') {
    //             $query->orderBy('price', 'asc');
    //         }

    //     } else {
    //         if ($request->publicationname !== null) {
    //             $query->where('title', 'like', $request->publicationname . '%');
    //         }

    //         if ($request->genre_id !== null) {
    //             $genre_id = explode(",", $request->genre_id);
    //             foreach ($genre_id as $gid) {
    //                 $query->orWhere('genre', 'like', '%"'.$gid.'"%');
    //             }
    //         }

    //         if ($request->article_id !== null) {
    //             $article_id = explode(",", $request->article_id);
    //             foreach ($article_id as $aid) {
    //                 $query->orWhere('article_type', $aid);
    //             }
    //         }

    //         if ($request->minprice !== null) {
    //             $query->where('price', '>', $request->minprice);
    //         }

    //         if ($request->maxprice !== null) {
    //             $query->where('price', '<', $request->maxprice);
    //         }

    //         if ($request->sortedval == 'dsc') {
    //             $query->orderBy('price', 'desc');
    //         } elseif ($request->sortedval == 'asc') {
    //             $query->orderBy('price', 'asc');
    //         }
    //     }

    //     return response()->json($query->get());
        // return response()->json($request->all());
    // $query = Publication::with('article_type', 'region');

    // // Filter by region
    // $regionId = $request->input('region_id');
    // if ($regionId !== null) {
    //     $query->whereHas('region', function ($regionQuery) use ($regionId) {
    //         $regionQuery->whereIn('id', explode(',', $regionId));
    //     });
    // }
    
    // // Filter by publication name
    // $publicationName = $request->input('publicationname');
    // if ($publicationName !== null) {
    //     $query->where('title', 'like', '%'.$publicationName . '%');
    // }
    
    // // Filter by genre
    // $genreId = $request->input('genre_id');
    // if ($genreId !== null) {
    //     $genreIds = explode(',', $genreId);
    //     $query->whereIn('genre', $genreIds);
    // }

    // // $genreId = $request->input('genre_id');
    // // if ($genreId !== null) {
    // //     $genreIds = explode(',', $genreId);
    // //     $query->whereIn('genre', 'like', '%"'. $genreId .'"%');
    // // }
    
    // // Filter by article type
    // $articleId = $request->input('article_id');
    // if ($articleId !== null) {
    //     $query->where('article_type', $articleId);
    // }
    
    // // Filter by price range
    // $minPrice = $request->input('minprice');
    // if ($minPrice !== null) {
    //     $query->where('price', '>=', $minPrice);
    // }
    
    // $maxPrice = $request->input('maxprice');
    // if ($maxPrice !== null) {
    //     $query->where('price', '<=', $maxPrice);
    // }
    
    // // Sort by price
    // $sortedVal = $request->input('sortedval');
    // if ($sortedVal === 'dsc') {
    //     $query->orderBy('price', 'desc');
    // } elseif ($sortedVal === 'asc') {
    //     $query->orderBy('price', 'asc');
    // }
    
    // $results = $query->get();
    
    // return response()->json($results);
    $query = Publication::with('article_type', 'region');

        // Filter by region
        $regionId = $request->input('region_id');
            if ($regionId !== null) {
                $query->whereHas('region', function ($regionQuery) use ($regionId) {
                    $regionQuery->whereIn('id', explode(',', $regionId));
                });
            }
        // $regionId = $request->input('region_id');
        // if ($regionId !== null) {
        //     $query->whereHas('region', function ($regionQuery) use ($regionId) {
        //         $regionQuery->whereIn('id', explode(',', $regionId));
        //     });
        // }

        // Filter by publication name
        $publicationName = $request->input('publicationname');
        if ($publicationName !== null) {
            $query->where('title', 'like', '%' . $publicationName . '%');
        }

        // Filter by genre
        // $genreId = $request->input('genre_id');
        // if ($genreId !== null) {
        //     $query->whereJsonContains('genre', $genreId);
        // }
        $genreId = $request->input('genre_id');
        if ($genreId !== null) {
            $genreIds = explode(',', $request->input('genre_id'));
			foreach ($genreIds as $genreI_d) {
				$query->where(function ($query) use ($genreI_d) {
					$query->whereJsonContains('genre', $genreI_d);
				});
			}
        }


        // Filter by article type
        $articleId = $request->input('article_id');
        if ($articleId !== null) {
            $query->where('article_type', $articleId);
        }

        // Filter by price range
        $minPrice = $request->input('minprice');
        $maxPrice = $request->input('maxprice');

        if ($minPrice !== null && $maxPrice !== null) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        } elseif ($minPrice !== null) {
            $query->where('price', '>=', $minPrice);
        } elseif ($maxPrice !== null) {
            $query->where('price', '<=', $maxPrice);
        }

        // $minPrice = $request->input('minprice');
        // if ($minPrice !== null) {
        //     $query->where('price', '>=', $minPrice);
        // }

        // $maxPrice = $request->input('maxprice');
        // if ($maxPrice !== null) {
        //     $query->where('price', '<=', $maxPrice);
        // }

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

        $results = $query->get();

        return response()->json($results);

            }
}
}