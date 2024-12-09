<x-app-layout>
    @foreach ($grades as $grade)
    <a href="{{route('grades.show', ['grade'=>$grade])}}">
        @if (!isset($course))
            {{$grade->course->name}}: 
        @endif
        {{$grade->value}}
    </a> <br>
    @endforeach

    moyenne = {{ $grades->mean() }}

    <br>
    @if (isset($course))
        <a href="{{ route('courses.grades.create', ['course' => $course]) }}">create</a>
        <a href="{{ route('courses.show', ['course' => $course])}}">cours</a>
    @endif
</x-app-layout>