@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h2>
    {{ $movie->title  }}
</h2>
<p>
    <a href="{{route('genre', ['genre' => $movie->genre])}}">
    {{ $movie->genre  }}
    </a>
</p>
<p>
    {{ $movie->director  }}
</p>
<p>
    {{ $movie->year_of_release  }}
</p>
<p>
    {{ $movie->storyline  }}
</p>

<h4>Comments</h4>
@forelse($movie->comments as $comment)
{{ $comment->content }}
<p>At {{ $comment->created_at }}</p>
@empty
<span>No comments</span>
@endforelse

<form class="mt-3" action="{{ route('createComment', ['movie' => $movie->id]) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="content">Add comment:</label>
        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
        @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection