<aside id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white" style="width: 240px">
    <div class="m-4">Recently added</div>
    <div class="list-group list-group-flush mx-3 mt-4">
        @foreach($movies->reverse()->slice(0, 5) as $movie)
        <a href="{{route('movie', ['movie' => $movie->id])}}" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-lock fa-fw me-3"></i><span>{{ $movie->title  }}</span></a
        >
        @endforeach
    </div>
</aside>