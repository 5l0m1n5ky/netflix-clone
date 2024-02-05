<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/edit-style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="container">
        <a id="return" href="/"><i class="bi bi-arrow-return-left"></i></a>
        <div id="cover-container">
            <img src="{{ asset($movie->cover) }}" alt="">
            <div id="overlay"><a href="/play/{{ $movie->id }}"><i class="bi bi-play-circle-fill"></i></a></div>
        </div>
        <div id="info-container">
            <form method="POST" enctype="multipart/form-data" action="/edit/{{ $movie->id }}">
                @csrf
                @method('PUT')
                <h5>TYTUŁ</h5>
                <input type="text" value="{{ $movie->title }}" name="title">
                <h5>GATUNEK</h5>

                @foreach ($genres as $genre)
                    <div class="genre-option">
                        @php
                            if (in_array($genre->genre, $movieGenres)) {
                                echo '<input type="checkbox" name="genre[]" value="' . $genre->id . '" checked/>';
                                // echo '<input type="checkbox" name="genre[]" value="' . {{ $genre->id }} . '" checked/>';
                            } else {
                                echo '<input type="checkbox" name="genre[]" value="' . $genre->id . '"/>';
                                // echo '<input type="checkbox" name="genre[]" value="' . {{ $genre->id }} . '"/>';
                        } @endphp
                        <label for="genre[]">{{ $genre->genre }}</label>
                    </div>
                @endforeach

                <h5>OPIS</h5>
                <textarea name="description" rows="10">{{ $movie->description }}</textarea>
                <h5>PRODUKCJA</h5>
                <input type="text" value="{{ $movie->production }}" name="production">
                <h5>PLIK VIDEO</h5>
                <input type="file" id="media_path" name="media_path">
                @error('media_path')
                    <p>Błąd danych</p>
                @enderror
                <h5>OKŁADKA</h5>
                <input type="file" id="cover" name="cover">
                @error('cover')
                    <p>Błąd danych</p>
                @enderror
                <br><br><br>
                <input type="submit" value="AKTUALIZUJ">
            </form>
        </div>
    </div>

</body>

</html>
