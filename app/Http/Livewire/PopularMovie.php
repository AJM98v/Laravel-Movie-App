<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PopularMovie extends Component
{
    public $popular;
    public function mount(){
        $this->popular = Http::get('https://api.themoviedb.org/3/movie/popular',['page'=>'1','api_key'=>config('services.api.key'),'language'=>'fa_IR'])->json('results');
    }
    public function render()
    {
        return view('livewire.popular-movie',['popular'=>$this->popular]);
    }
}
