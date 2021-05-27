<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 20px
        }

        .position-ref {
            position: relative;
        }

        .movie {
            display: flex;
            flex-direction: column;
            width: calc(100% / 5 - 20px);
            background-color: wheat
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">

        @foreach ($movies as $movie)
            <div class="movie">
                <span>{{ $movie->id }}</span>
                <span>{{ $movie->title }}</span>
                <span>{{ $movie->original_title }}</span>
                <span>{{ $movie->nationality }}</span>
                <span>{{ $movie->date }}</span>
                <span>{{ $movie->vote }}</span>
            </div>
        @endforeach
    </div>
</body>

</html>
