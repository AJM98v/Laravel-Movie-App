<ul class="flex h-14 items-center">
    <x-nav-link :active="request()->routeIs('home')" href="{{route('home')}}" >
        <span>Home</span>
    </x-nav-link>
    <x-nav-link :active="request()->routeIs('series')" href="{{route('series')}}" >
        <span>TV Show</span>

    </x-nav-link>
    <x-nav-link :active="request()->routeIs('movies')" href="{{route('movies')}}" >
        <span>Movie</span>

    </x-nav-link>
</ul>

