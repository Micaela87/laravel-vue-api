<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $series -> title }}</title>
</head>
<body>
    <h1>{{ $series -> title }}</h1>
    <h3>Autore: {{ $series -> author }}</h3>
    <h3>Data di rilascio: {{ $series -> release_date }}</h3>
    <h3>Rating: {{ $series -> rating }}/5</h3>
</body>
</html>