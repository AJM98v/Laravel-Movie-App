<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    //
    public function show($id){
        $show = Http::get("https://api.themoviedb.org/3/tv/$id",['api_key'=>config('services.api.key'),'language'=>'fa-IR','append_to_response'=>'credits'])->json();
        return view('show',['show'=>$show]);
    }

    public function category($category){
        $series1 =Http::get("https://api.themoviedb.org/3/tv/$category",['page'=>1,'api_key'=>config('services.api.key'),'language'=>'fa_IR'])->json('results');
        $series2 =Http::get("https://api.themoviedb.org/3/tv/$category",['page'=>2,'api_key'=>config('services.api.key'),'language'=>'fa_IR'])->json('results');
        $series3 =Http::get("https://api.themoviedb.org/3/tv/$category",['page'=>3,'api_key'=>config('services.api.key'),'language'=>'fa_IR'])->json('results');
        $series = array_merge($series1,$series2,$series3);
        return view('TvCategory',['series'=>$series]);


    }

}
