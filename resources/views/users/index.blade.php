<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container py-4">
            <h1>Comics</h1>

            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4">
                @foreach ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img src="{{$comic->thumb}}" alt="" class="card-img-top">
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        </div>
    </main>

</body>

</html>