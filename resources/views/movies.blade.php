@extends('layout.master')

@section('content')
    @livewire('upcoming-movie')
    <hr>
    @livewire('popular-movie')
    <hr>
    @livewire('rated-movie')


@endsection
