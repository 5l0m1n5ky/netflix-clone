<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main View</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/play-style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="container">
        <a href="/"><i class="bi bi-arrow-return-left"></i></a>
        <video controls autoplay loop src="{{ asset($movie_path) }}"></video>
    </div>
</body>

</html>
