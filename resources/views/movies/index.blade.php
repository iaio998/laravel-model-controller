@extends('layouts.app')

@section('title', 'Movies')

@section('content')

<main id="main-content">
    <div class="container bg-dark">
        <h1>Movies</h1>
        <div class="row gy-3">
            @foreach($movies as $movie)
            <div class="col-12 col-md-3 col-lg-4">
                <div class="my-card">
                    <div class="my-img-cont">
                        <img src="{{$movie->image}}" alt="{{$movie->title}}">
                    </div>
                    <div class="my-text-cont text-center">
                        <p>Title: {{$movie -> title}}</p>
                        <p>Original language: {{$movie -> language}}</p>
                        <p>Vote: {{$movie -> vote}}/10</p>
                    </div>
                    <div class="my-btn">
                        <button><a href="{{route('movies.show', $movie->id)}}">SHOW MORE</a></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection