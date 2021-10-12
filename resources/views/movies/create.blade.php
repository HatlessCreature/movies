@extends('layouts.app')
@section('title', 'Add a movie')

@section('content')
<form action="/create" method="POST">
    @csrf
    <div class="form-group">
        <label for='title'>Title</label>
        <input placeholder="Enter the movie title" id="title" name="title" type="text" class="form-control">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <input placeholder="Enter the movie genre" name="genre" id="genre" class="form-control"></input>
        @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="director">Director</label>
        <input placeholder="Enter the movie director" name="director" id="director" class="form-control"></input>
        @error('director')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="year_of_release">Year of release</label>
        <input placeholder="Enter the year of release" name="year_of_release" id="year_of_release" class="form-control"></input>
        @error('year_of_release')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="storyline">Storyline</label>
        <input placeholder="Enter a short story of the movie" name="storyline" id="storyline" class="form-control"></input>
        @error('storyline')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection