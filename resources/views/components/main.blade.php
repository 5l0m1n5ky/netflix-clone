<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/main-style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="main-container">
        <div id="header">
            <form action="/">
                <input type="text" id="text-field" name="search" placeholder="Szukaj...">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <div id="movie-gallery-container">
            {{ $slot }}
        </div>
    </div>


</body>


</html>
