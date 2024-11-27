<h2>Grades</h2>

<ul>
@foreach ($grades as $grade)
  <li>
      <a href="{{ route('courses.grades.show', [$course, $grade]) }}">{{ $grade->value }}</a>
      <form action="{{ route('courses.grades.destroy', [$course, $grade]) }}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="J'la veux plus!">
      </form>
  </li>
@endforeach
</ul>
