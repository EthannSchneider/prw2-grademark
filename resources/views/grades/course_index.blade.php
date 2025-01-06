<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

<h2>{{ $course->name }} grades</h2>

@if ($grades->isNotEmpty())
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
@else
  <p>Il n'y a pas de notes pour ce cours.</p>
@endif

</div></div>
</x-app-layout>
