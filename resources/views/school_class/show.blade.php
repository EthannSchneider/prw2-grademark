<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
    <h2>{{ $school_class->name }}</h2>

    <p>Study Plan : {{ $school_class->studyPlan->name }}</p>

    <form action="{{ route('school_classes.update', $school_class) }}" method="post">
    @csrf
    @method('put')
    <ul>
    @foreach($school_class->students as $student)
        <li>
            <input type="checkbox" value="{{ $student->id }}" name="students[]" checked>
            <label for="{{ $student->id }}">{{ $student->name }}</label>
        </li>
    @endforeach
    <br>
    @foreach($availableStudents as $student)
        <li>
            <input type="checkbox" value="{{ $student->id }}" name="students[]">
            <label for="{{ $student->id }}">{{ $student->name }}</label>
        </li>
    @endforeach
    </ul>
    <button>Modifier</button>
</form>
</div></div>
</x-app-layout>
