<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

<form action="{{ route('grades.store') }}" method="post">
    @csrf
    @include('grades.form')
</form>

</div></div>
</x-app-layout>
