<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
    <h2>Create School Classes</h2>
    <form action="{{ route('school_classes.store') }}" method="post">
        @csrf
        <input required name="name" id="name" value="{{ $school_class->name }}" class="@error('value') is-invalid @enderror">
        <select name="study_plan_id">
            @foreach ($study_plans as $study_plan)
                <option value="{{ $study_plan->id }}" @if ($school_class->studyPlan == $study_plan) selected @endif>{{ $study_plan->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Vas-<b>y</b></button>
    </form>
</div></div>
</x-app-layout>
