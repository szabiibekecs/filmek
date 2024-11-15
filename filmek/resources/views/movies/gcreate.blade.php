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

    <form action="{{route('movies.gcreate.store')}}" method="post">
        @csrf
        <label for="nev">Név:</label>
        <input type="text" name="nev" id="nev"> <br>
        <input type="submit" value="Feltölt">
    </form>
</body>
</html>