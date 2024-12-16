<h2>{{ $student->name }}</h2>
<h3>His/Her grades<h3>
@include('grades.list', ['grades' => $student->grades])
