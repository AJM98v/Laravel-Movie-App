<div class="flex flex-col my-7">

    <div class="flex justify-between items-center">
        <h2 class="text-xl text-sky-300 font-bold uppercase mx-4 ">upcoming</h2>
        <a href="{{route('category','upcoming')}}"><x-button class="btn-primary">View More</x-button></a>
    </div>
    <div class="mt-8 grid grid-cols-6  gap-10 upcoming-slide relative">
        <div class="swiper-wrapper">
            @foreach($upcoming as $movie)
                <x-card class="relative swiper-slide">
                    <img src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}"
                         class="w-full h-full object-cover" alt="poster">
                    <x-overlay>
                        <h3 class="font-bold text-xl">{{$movie['title']}}</h3>
                        <span>{{$movie['vote_average']*10}}%</span>
                        <a href="{{route('movie',$movie['id'])}}"> <x-button class="bg-indigo-900 text-white">See More</x-button></a>
                    </x-overlay>
                </x-card>
            @endforeach
        </div>
        <div class="next bg-white rounded-[50%] absolute right-1 top-[50%] translate-y-[-50%] z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>
        <div class="prev bg-white rounded-[50%] absolute left-1 top-[50%] translate-y-[-50%] z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </div>


    </div>
</div>
