<x-main>

    @foreach ($movies as $movie)
        <div class="movie-item">
            <h3>{{ $movie->title }}</h3>
            <div class="movie-content">
                <video src="{{ $movie->media_path }}" poster="{{ $movie->cover }}"></video>
                <div class="overlay">
                    <a href="/play/{{ $movie->id }}"><i class="bi bi-play-circle-fill"></i></a>
                    <a href="/showInfo/{{ $movie->id }}"><i class="bi bi-info-circle-fill"></i></a>
                    <a href="/editMovie/{{ $movie->id }}"><i class="bi bi-pencil-square"></i></a>
                    <a href="/delete/{{ $movie->id }}"><i class="bi bi-trash3-fill"></i></a>
                    <a href="/createMovie"><i class="bi bi-plus-square"></i></a>
                </div>
            </div>
        </div>
    @endforeach

</x-main>
