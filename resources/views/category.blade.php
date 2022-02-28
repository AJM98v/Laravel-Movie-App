@extends('layout.master')

@section('content')
    <div class="w-full  grid grid-cols-1 gap-5 p-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 justify-items-center">
        @foreach($movies as $movie)
            <x-card class="relative">
                <img src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}"
                     class="w-full h-full object-cover" alt="poster">
                <x-overlay class="p-4">
                    <h3 class="font-bold text-sm">{{$movie['title']}}</h3>
                    <span>{{$movie['vote_average']*10}}%</span>
                    <a href="{{route('movie',$movie['id'])}}">
                        <x-button class="bg-indigo-900 text-white">See More</x-button>
                    </a>
                </x-overlay>
            </x-card>

        @endforeach

    </div>
@endsection
