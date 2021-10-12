@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h2>
    {{ $movie->title  }}
</h2>
<p>
    {{ $movie->genre  }}
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



@endsection