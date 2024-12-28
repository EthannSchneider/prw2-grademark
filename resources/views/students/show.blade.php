<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

<h2>{{ $student->name }}</h2>
<h3>His/Her grades<h3>
@include('grades.list', ['grades' => $student->grades])

</div></div>
</x-app-layout>
