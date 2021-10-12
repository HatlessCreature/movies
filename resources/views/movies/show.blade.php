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

@endsection