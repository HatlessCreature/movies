@extends('layouts.app')

@section('title', 'Genre')
@section('content')
<h1>Genre</h1>
<ul>
    @foreach($moviesGenre as $movie)
    <li>
        <a href="{{route('movie', ['movie' => $movie->id])}}">
            {{ $movie->title  }}
        </a>
        <p>
            {{ $movie->storyline }}
        </p>
    </li>
    @endforeach
</ul>

@endsection

@section('sidebar')
@include('layouts.sidebar')
@endsection
