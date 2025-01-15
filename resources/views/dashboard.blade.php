<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

@if (auth()->user()->type == 'App\Models\Student') <a href="{{ route('grades.index') }}">My grades</a> @endif
@if (auth()->user()->type == 'App\Models\Manager') <a href="{{ route('students.index') }}">Students</a> @endif
@if (auth()->user()->type == 'App\Models\Manager') <a href="{{ route('study_plans.index') }}">Study plans</a> @endif

<div class="mt-4">
    <h2 class="text-lg font-semibold">Best student</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Mean grade</th>
        </tr>
    @foreach ($best_student as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->grades->mean() }}</td>
        </tr>
    @endforeach
    </table>    
</div>

</div></div>
</x-app-layout>
