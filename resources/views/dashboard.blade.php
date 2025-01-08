@use('App\Role')

<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
@if (Auth::user()->role() == Role::Student)
    <a href="{{ route('grades.index') }}">My grades</a>
@else
    <a href="{{ route('students.index') }}">Students</a>
@endif


</div></div>
</x-app-layout>
