<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>

<body>
    grades = <?= $grade->value ?>
    <br>

    <a href="/grades/{{$grade->id}}/edit">edit</a>
    <a href="/grades/">list</a>
    <form action="/grades/{{$grade->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
</body>

</html>