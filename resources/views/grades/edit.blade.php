<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>
    </head>
    <body>
        <form action="{{ route('grades.update', ['grade' => $grade]) }}" method="POST" class="flex flex-col align-items-center justify-center">
            @csrf
            @method('PUT')

            <input required name="value" type="number" value="{{ $grade->value }}">

            <input type="submit" name="submit" value="Submit"/>
        </form>
    </body>
</html>
