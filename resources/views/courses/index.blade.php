
@foreach ($courses as $course)
<a href="{{route('courses.show', ['course'=>$course->id])}}">{{$course->name}}</a> <br>
@endforeach
<br>
<a href="{{ route('courses.create') }}">create</a>