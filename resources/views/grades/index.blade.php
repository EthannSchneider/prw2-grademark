<h2>Grades</h2>

<ul>
@foreach ($grades as $grade)
  <li>{{ $grade->value }}</li>
@endforeach
</ul>
