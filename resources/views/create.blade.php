<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/create-style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="container">
        <a id="return" href="/"><i class="bi bi-arrow-return-left"></i></a>
        <div id="form-container">
            <form method="POST" enctype="multipart/form-data" action="{{ url('store') }}">
                @csrf
                @method('POST')
                <h5>TYTUŁ</h5>
                <input type="text" name="title">
                @error('title')
                    <p>Błąd danych</p>
                @enderror
                <h5>GATUNEK</h5>

                @foreach ($genres as $genre)
                    <div class="genre-option">
                        <input type="checkbox" name="genre[]" value="{{ $genre->id }}">
                        <label for="genre[]">{{ $genre->genre }}</label>
                    </div>
                @endforeach

                @error('genre[]')
                    <p>Błąd danych</p>
                @enderror

                <h5>OPIS</h5>
                <textarea name="description" rows="10"></textarea>
                @error('description')
                    <p>Błąd danych</p>
                @enderror
                <h5>PRODUKCJA</h5>
                <input type="text" name="production">
                @error('production')
                    <p>Błąd danych</p>
                @enderror
                <h5>PLIK VIDEO</h5>
                <input type="file" id="media_path" name="media_path">
                @error('media-path')
                    <p>Błąd danych</p>
                @enderror
                <h5>OKŁADKA</h5>
                <input type="file" id="cover" name="cover"><br><br><br>
                @error('cover')
                    <p>Błąd danych</p>
                @enderror
                <input type="submit" value="DODAJ">
            </form>
        </div>
    </div>

</body>

</html>
