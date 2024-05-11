@extends('layout')

@section('content')

@include('partials._hero')
@include('partials._search')
{{-- <h2>{{$nameOfRes}}</h2> --}}
<div
    class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>

    @unless(count($listings) == 0)

    @foreach ($listings as $listing)
    <x-listing-card :listing="$listing" /> {{-- no space should exist b4 or after "=" --}}
    @endforeach

    @else
    <p>testo kei listing xaina!</p>

    @endif

@endsection
{{-- 

<h3>Aray hai ta aba</h3> 
<p>{{ $listing['id'] }}</p>
    <a href="/listings/{{$listing['id']}}"><p>{{ $listing['title']; }}</p></a>
    <p>{{ $listing['description']; }}</p> --}}

