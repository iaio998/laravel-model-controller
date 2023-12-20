@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h2>Selected movie</h2>
<h1>{{$movie->title}}</h1>
@endsection