<h1>Lets go!</h1>

<h2>{{$nameOfRes}}</h2>

<h3>Aray hai ta aba</h3>

@if(count($listings) == 0)
<p>array khali xa!</p>
@endif

@foreach ($listings as $listing)

    <p>{{ $listing['id'] }}</p>
    <a href="/listings/{{$listing['id']}}"><p>{{ $listing['title']; }}</p></a>
    <p>{{ $listing['description']; }}</p>

@endforeach