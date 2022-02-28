<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class UpcomingMovie extends Component
{
    public $upcoming;

    public function mount()
    {
        $this->upcoming = Http::get('https://api.themoviedb.org/3/movie/upcoming',['api_key'=>config('services.api.key'),'page'=>1,'language'=>'fa_IR'])->json('results');
    }

    public function render()
    {
        return view('livewire.upcoming-movie',['upcoming'=>$this->upcoming]);
    }
}
