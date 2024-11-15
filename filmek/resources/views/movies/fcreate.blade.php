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
        <label for="ganre_id">Műfaj</label>
        <select name="ganre_id" id="ganre_id">
            @foreach($genres as $genre)
            <option value="{{$genre->id}}">{{$genre->nev}}</option>
            @endforeach
        </select><br>
        <label for="cim">Cím:</label>
        <input type="text" name="cim" id="cim"><br>
        <label for="rendezo">Rendező:</label>
        <input type="text" name="rendezo" id="rendezo"><br>
        <label for="megjelenes">Megjelenés éve:</label>
        <input type="text" name="megjelenes" id="megjelenes"><br>
        <input type="submit" value="Feltölt">

    </form>
</body>
</html>