@extends('layouts.public')

@section('content')
    <div>Movies</div>
    <div class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <div class="wrapper">
                    <h2>{{ $movie->title }}</h2>
                    <h3>{{ $movie->original_title }}</h3>
                    <p>{{ $movie->nationality }}</p>
                    <p>{{ $movie->date }}</p>
                    <p>{{ $movie->vote }}</p>
                </div>
            </div>
        @endforeach


    </div>
@endsection
