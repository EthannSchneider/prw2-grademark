<x-app-layout>
    <?php
    $moyenne = 0;
    ?>
    @foreach ($grades as $grade)
    <?php $moyenne += $grade->value * $grade->weight; ?>
    <a href="{{route('grades.show', ['grade'=>$grade])}}">
        @if (!isset($course))
            {{$grade->course->name}}: 
        @endif
        {{$grade->value}}
    </a> <br>
    @endforeach

    @if (count($grades) > 0)
        moyenne = {{ $moyenne / count($grades) }}
    @endif

    <br>
    @if (isset($course))
        <a href="{{ route('courses.grades.create', ['course' => $course]) }}">create</a>
        <a href="{{ route('courses.show', ['course' => $course])}}">cours</a>
    @endif
</x-app-layout>