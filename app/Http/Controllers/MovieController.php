<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MovieController extends Controller
{

    //
    public function show($id){
        $movie = Http::get("https://api.themoviedb.org/3/movie/$id",['api_key'=>config('services.api.key'),'language'=>'fa-IR','append_to_response'=>'credits'])->json();
        return view('movie',['movie'=>$movie]);
    }
    public function category($category){
        $movies1 =Http::get("https://api.themoviedb.org/3/movie/$category",['page'=>1,'api_key'=>config('services.api.key'),'language'=>'fa_IR'])->json('results');
        $movies2 =Http::get("https://api.themoviedb.org/3/movie/$category",['page'=>2,'api_key'=>config('services.api.key'),'language'=>'fa_IR'])->json('results');
        $movies3 =Http::get("https://api.themoviedb.org/3/movie/$category",['page'=>3,'api_key'=>config('services.api.key'),'language'=>'fa_IR'])->json('results');
        $movies = array_merge($movies1,$movies2,$movies3);
        return view('category',['movies'=>$movies]);


    }
}
