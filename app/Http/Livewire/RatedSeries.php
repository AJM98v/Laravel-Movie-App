<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RatedSeries extends Component
{
    public $rated;

    public function mount()
    {
        $this->rated = Http::get('https://api.themoviedb.org/3/tv/top_rated', ['api_key' => config('services.api.key'), 'page' => 1, 'language' => 'fa_IR'])->json('results');
    }

    public function render()
    {
        return view('livewire.rated-series', ['rated' => $this->rated]);
    }

}
