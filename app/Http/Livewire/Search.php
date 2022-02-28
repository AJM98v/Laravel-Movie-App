<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Search extends Component
{
    public $search;
    public $results;


    public function updated(){
         $this->results = Http::get("https://api.themoviedb.org/3/search/movie",
             ['api_key'=>config('services.api.key'),'language'=>'fa-IR','query'=>$this->search,'page'=>'1','adult'=>false])
             ->json('results');




    }

    public function render()
    {
        return view('livewire.search',['results'=>$this->results]);
    }
}
