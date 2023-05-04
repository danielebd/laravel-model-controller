<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container d-flex flex-wrap justify-content-between gap-5">
        @foreach ($movies as $item)
            <div class="card col-4" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">{{$item->title}}</h4>
                    <p class="card-text">Original title: {{$item->original_title}}</p>
                    <p class="card-text">Nazionalità: {{$item->nationality}}</p>
                    <p class="card-text">Data uscita: {{$item->date}}</p>
                    <p class="card-text">Voto: {{$item->vote}}</p>
                </div>
            </div>
        @endforeach

    </div>
</body>

</html>
