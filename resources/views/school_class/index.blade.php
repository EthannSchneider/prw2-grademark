<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

<h2>School classes</h2>

<div class="mt-4">
    <a href="{{ route('school_classes.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add new school class</a>
</div>

@foreach($school_classes as $school_class)
    <a href="{{ route('school_classes.show', $school_class) }}">{{$school_class->name}} </a>
@endforeach

</div></div>
</x-app-layout>
