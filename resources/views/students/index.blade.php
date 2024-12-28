<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

<h2>Students</h2>

<ul>
@foreach ($students as $student)
  <li>
    <a href="{{ route('students.show', $student) }}">{{ $student->name }}</a>
  </li>
@endforeach
</ul>

</div></div>
</x-app-layout>
