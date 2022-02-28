@extends('layout.master')

@section('content')

    <div class="w-full h-screen relative">
        <div
            class="absolute transform translate-x-[-50%] translate-y-[-50%] top-[50%] left-[50%] rounded-2xl bg-black h-[70%] w-[80%] overflow-hidden shadow drop-shadow shadow-gray-800 text-right">
            <img src="https://image.tmdb.org/t/p/original{{$show['backdrop_path']}}" alt="poster"
                 class="h-full w-full object-cover">
            <div
                class=" absolute top-10 right-10 bg-black bg-opacity-70 text-white p-10 rounded-3xl flex flex-col md:grid md:grid-cols-3070 gap-5 auto-rows-auto lg:w-[75%] h-fit sm:w-[85%]">
                <img src="https://image.tmdb.org/t/p/w500{{$show['poster_path']}}"
                     class="rounded shadow shadow-gray-700 h-56 w-40 col-start-2 row-span-full" alt="poster">
                <div class="flex flex-col justify-end items-end">
                    <h1 class="text-2xl font-bold  col-start-1 text-right">{{$show['name']}}</h1>
                    <span class="opacity-80 flex  col-start-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600 text-right" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round"
                                                                         stroke-width="2"
                                                                         d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>{{$show['vote_average']*10}}%
                    </span>
                    <p class="text-sm md:block hidden">{{$show['overview']}}</p>


                </div>


            </div>
        </div>


    </div>
    <h1 class="font-bold text-2xl text-white md:hidden block m-3 uppercase">Overview :</h1>
    <p class="md:hidden block text-white text-right mx-5 mb-10">{{$show['overview']}}</p>
    <hr>
    <h1 class="text-2xl text-white m-3 uppercase">Actor</h1>
    <div class="grid grid-cols-1 my-10 justify-items-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 lg:my-10">
        @foreach($show['credits']['cast'] as $actor)
            @if($loop->index <6)
                <div class="flex flex-col justify-center items-center sm:my-10 lg:my-1 my-10">
                    <x-card>
                        <img src="https://image.tmdb.org/t/p/w500/{{$actor['profile_path']}}" alt="actor">
                    </x-card>
                    <h3 class="text-lg text-white">{{$actor['name']}}</h3>
                    <h6 class="text-xs text-gray-400">{{$actor['character']}}</h6>
                </div>


            @endif

        @endforeach
    </div>

@endsection
