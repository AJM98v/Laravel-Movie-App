<div class=" rounded w-80 flex p-1 m-2 items-center bg-white relative" x-data="{
    open:false,
    message :'Your Results !'
}" @click.outside="open =false">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
    </svg>
    <input type="search" name="search" id="search" class="outline-none border-none mx-2 w-full" @focus="open = true"
           wire:model.debounce.400ms='search' @keyup.esc.window="open=false">


    <div x-show="open" x-transition.opacity.duration.150ms class="absolute bg-white w-80 p-1 h-fit top-8 left-0 z-10">
        <h4 x-text="message" class="text-gray-400"></h4>
        <hr>

        @if($results === null)
            <h3 class="font-bold text-sm">NO Match Find !</h3>
        @else
            @foreach($results as $result)
                @if($loop->index <6)
                    <a href="{{route('movie',$result['id'])}}">
                        <div class="flex justify-between py-3 hover:bg-gray-200 transition-all duration-200 ease-in">
                            <img class="w-12 h-16 rounded shadow shadow-gray-900"
                                 src="https://image.tmdb.org/t/p/w500/{{$result['poster_path']}}" alt="poster">
                            <h6 class="text-black text-sm font-bold ">{{$result['title']}}</h6>
                        </div>
                    </a>
                    <hr>
                @endif
            @endforeach
        @endif


    </div>

</div>
