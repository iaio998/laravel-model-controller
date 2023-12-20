@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<main id="main-content">
    <div class="container bg-dark">
        <h1>{{$movie -> title}}</h1>
        <div class="row ">
            <div class="col-12 col-md-3 col-lg-4">
                <div class="my-card">
                    <div class="my-img-cont">
                        <img src="{{$movie->image}}" alt="{{$movie->title}}">
                    </div>
                    <div class="my-text-cont">
                        <p>Title: {{$movie -> title}}</p>
                        <p>Original language: {{$movie -> language}}</p>
                        <p>Vote: {{$movie -> vote}}/10</p>
                    </div>
                    <button><a href="{{route('movies.index')}}">GO BACK</a></button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection