<x-app-layout>
    <?php
    $moyenne = 0;
    ?>
    @foreach ($grades as $grade)
    <?php $moyenne += $grade->value; ?>
    <a href="{{route('grades.show', ['grade'=>$grade])}}">{{$grade->value}}</a> <br>
    @endforeach

    @if (count($grades) > 0)
        moyenne = {{ $moyenne / count($grades) }}
    @endif

    <br>
    <a href="{{ route('courses.grades.create', ['course' => $course]) }}">create</a>
    <a href="{{ route('courses.show', ['course' => $course])}}">cours</a>
</x-app-layout>