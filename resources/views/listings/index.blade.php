<x-layout>
    @include('partials._hero')
    @include('partials._search')
    {{-- <h2>{{$nameOfRes}}</h2> --}}
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    
        @unless(count($listings) == 0)
    
        @foreach ($listings as $listing)
        <x-listing-card :listing="$listing" /> {{-- no space should exist b4 or after "=" --}}
        @endforeach
    
        @else
        <p>testo kei listing xaina!</p>
    
        @endif
    </div>

    {{-- css have to be applied if tailwind is not being used. Use cmd : php artisan vendor:publish then enter 5 --}}
    <div class="mt-6 p-6"> 
        {{$listings->links()}}    
    </div>    

    
    {{-- <h3>Aray hai ta aba</h3> 
    <p>{{ $listing['id'] }}</p>
        <a href="/listings/{{$listing['id']}}"><p>{{ $listing['title']; }}</p></a>
        <p>{{ $listing['description']; }}</p> --}}
</x-layout>


