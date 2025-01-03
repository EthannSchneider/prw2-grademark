<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

<h2>Plan d'étude: {{ $studyPlan->name }}</h2>

<form action="{{ route('study_plans.update', $studyPlan) }}" method="post">
    @csrf
    @method('put')
    <ul>
    @foreach($studyPlan->courses as $course)
        <li>
            <input type="checkbox" value="{{ $course->id }}" name="courses[]" checked>
            <label for="{{ $course->id }}">{{ $course->name }}</label>
        </li>
    @endforeach
    <br>
    @foreach($availableCourses as $course)
        <li>
            <input type="checkbox" value="{{ $course->id }}" name="courses[]">
            <label for="{{ $course->id }}">{{ $course->name }}</label>
        </li>
    @endforeach
    </ul>
    <button>Modifier</button>
</form>

</div></div>
</x-app-layout>
