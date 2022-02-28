<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RatedMovie extends Component
{
    public $rated;
    public function mount(){
        $this->rated = Http::get('https://api.themoviedb.org/3/movie/top_rated',['api_key'=>config('services.api.key'),'page'=>1,'language'=>'fa_IR'])->json('results');
    }
    public function render()
    {
        return view('livewire.rated-movie',['rated'=>$this->rated]);
    }
}
