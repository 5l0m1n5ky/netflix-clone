<x-main>

    @foreach ($movies as $movie)
        <div class="movie-item">
            <h3>{{ $movie->title }}</h3>
            <div class="movie-content">
                <video src="{{ asset('storage/' . $movie->media_path) }}"
                    poster="{{ asset('storage/' . $movie->cover) }}"></video>
                <div class="overlay">
                    <a href="{{ url('play', [$movie->id]) }}"><i class="bi bi-play-circle-fill"></i></a>
                    <a href="{{ url('info', [$movie->id]) }}"><i class="bi bi-info-circle-fill"></i></a>
                    <a href="{{ url('edit', [$movie->id]) }}"><i class="bi bi-pencil-square"></i></a>
                    <a href="{{ url('delete', [$movie->id]) }}"><i class="bi bi-trash3-fill"></i></a>
                    <a href="{{ url('create') }}"><i class="bi bi-plus-square"></i></a>
                </div>
            </div>
        </div>
    @endforeach

</x-main>
