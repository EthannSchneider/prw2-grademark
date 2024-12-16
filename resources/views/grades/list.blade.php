<ul>
@foreach ($grades as $grade)
  <li>
      <a href="{{ route('grades.show', $grade) }}">{{ $grade->value }}</a>
  </li>
@endforeach
</ul>
<h3>Moyenne</h3>
{{ $grades->mean() }}
