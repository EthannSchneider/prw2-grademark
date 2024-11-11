<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>
</head>

<body>
    <?php
    $moyenne = 0;
    ?>
    @foreach ($grades as $grade)
        <?php $moyenne += $grade->value; ?>
        <a href="/grades/<?= $grade->id ?>">{{$grade->value}}</a> <br>
    @endforeach

    moyenne = {{ $moyenne / count($grades) }}
</body>

</html>