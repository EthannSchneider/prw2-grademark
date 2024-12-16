<h2>Students</h2>

<ul>
@foreach ($students as $student)
  <li>
    <a href="{{ route('students.show', $student) }}">{{ $student->name }}</a>
  </li>
@endforeach
</ul>
