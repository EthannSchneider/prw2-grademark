<?php
$moyenne = 0;
?>
@foreach ($grades as $grade)
<?php $moyenne += $grade->value; ?>
<a href="{{route('grades.show', ['grade'=>$grade->id, 'course' => $course->id])}}">{{$grade->value}}</a> <br>
@endforeach

@if (count($grades) > 0)
    moyenne = {{ $moyenne / count($grades) }}
@endif

<br>
<a href="{{ route('grades.create', ['course' => $course->id]) }}">create</a>
<a href="{{ route('courses.show', ['course' => $course->id])}}">back</a>