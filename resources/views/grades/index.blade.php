<h2>Grades</h2>

<ul>
@foreach ($grades as $grade)
  <li>
      <a href="{{ route('grades.show', $grade) }}">{{ $grade->value }}</a>
      <form action="{{ route('grades.destroy', $grade) }}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="J'la veux plus!">
      </form>
  </li>
@endforeach
</ul>
<h3>Moyenne</h3>
{{ $grades->mean() }}
