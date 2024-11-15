<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif

    @if (session('success'))
        {{session('success')}}
    @endif

    <form action="" method="post">
        @csrf
        <h1>Film madatok:</h1>
        @foreach($genres as $genre)
            <p>{{$genre->nev}}</p>
        @endforeach
        @foreach($movies as $movie)
            <p>{{$movie->cim}}</p>
            <p>{{$movie->rendezo}}</p>
            <p>{{$movie->megjelenes}}</p>
        @endforeach
    </form>


</body>
</html>