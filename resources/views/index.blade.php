@extends('layout.master')


@section('content')
    <div class="w-full h-screen p-5 rounded-3xl overflow-hidden relative">
        <img src="/image/Dlha%20(42).jpg" alt="bg"
             class="w-full h-full object-cover shadow shadow-gray-900 rounded-3xl">
        <div class="absolute top-40 left-10 h-fit sm:left-36 md:left-72 flex flex-col bg-black bg-opacity-50 rounded-2xl p-10">
            <h1 class="text-white text-3xl font-bold uppercase">Movie App</h1>
            <p class="text-white text-sm my-4 w-80 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque est
                eum obcaecati, odit quisquam tempora! Consectetur culpa debitis dicta in minus nemo perspiciatis
                quibusdam, quidem vero! Debitis, eligendi esse expedita modi necessitatibus sapiente. Alias asperiores
                at dolor repudiandae sunt.</p>
            <button
                class="bg-yellow-600 rounded w-44 py-1 px-10 text-lg hover:bg-yellow-800 transition-all duration-300 ease-in">
                Start Today
            </button>
        </div>
    </div>

@endsection
