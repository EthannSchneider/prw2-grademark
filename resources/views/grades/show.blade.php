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

    <a href="{{ route('grades.edit', $grade->id) }}">edit</a>
    <a href="{{ route('grades.index') }}">list</a>
    <form action="{{ route('grades.destroy', $grade->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
</body>

</html>