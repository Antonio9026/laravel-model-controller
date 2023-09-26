@extends('layouts.public')

@section("content")


<div class="container">
@foreach ($movies as $movie )
<div class="card">
<h2>{{$movie->title}}</h2>
<h3>{{$movie->original_title}}</h3>
<p>{{$movie->nationality}}</p> 
<p>{{$movie->date}}</p>
<p>{{$movie->vote}}</p>
</div>
@endforeach 
  

</div>
@endsection