<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')

</head>

<body>

    <div class="container py-3">

        <div class="row">

        @foreach ($movies as $movie)

            <div class="col-3 mb-3">
                <div class="card h-100">
                    <div class="card-body border border-5 border-warning bg-success">
                        <h1 class="card-title">{{ $movie->title }}</h1>
                        <p class="card-text">Original title: {{ $movie->original_title }}</p>
                        <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                        <p class="card-text">Date: {{ $movie->date }}</p>
                        <p class="card-text">Vote: {{ $movie->vote }}</p>
                    </div>
                </div>
            </div>

        @endforeach
        
        </div>

    </div>
    
</body>
