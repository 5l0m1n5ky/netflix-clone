<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/info-style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="container">
        <a id="return" href="/"><i class="bi bi-arrow-return-left"></i></a>
        <div id="rating-space">
            <h3>OCENA</h3>
            <h2> @php
                $roundResult = round($rate, 1, PHP_ROUND_HALF_DOWN);

                if ($roundResult != 0) {
                    echo $roundResult . '/5';
                } else {
                    echo '-/5';
                }
            @endphp </h2>
        </div>
        <div id="cover-container">
            <img src="{{ asset($movie->cover) }}" alt="">
            <div id="overlay"><a href="/play/{{ $movie->id }}"><i class="bi bi-play-circle-fill"></i></a></div>
        </div>
        <div id="info-container">
            <h5>TYTUŁ</h5>
            <h3>{{ $movie->title }}</h3>
            <h5>GATUNEK</h5>
            @foreach ($genres as $genre)
                <h3>{{ $genre->genre }}</h3>
            @endforeach
            <h5>OPIS</h5>
            <h3>{{ $movie->description }}</h3>
            <h5>PRODUKCJA</h5>
            <h3>{{ $movie->production }}</h3>
            <h5>OCEŃ FILM W SKALI 1-5</h5>

            <form action="/submitRating/{{ $movie->id }}" method="POST">
                @csrf
                @method('POST')
                <input type="range" min="1" max="5" step="1" value="5" class="slider"
                    name="rate"><br>
                <input type="submit" value="PRZEŚLIJ">
            </form>
        </div>
    </div>
</body>

</html>
