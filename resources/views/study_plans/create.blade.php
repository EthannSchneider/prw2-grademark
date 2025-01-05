<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

<h2>Nouveau plan d'étude</h2>

<form action="{{ route('study_plans.store') }}" method="post">
    @csrf
    <label for="name">Nom:</label>
    <input name="name" id="name" value="{{ $studyPlan->name }}" class="@error('name') is-invalid @enderror">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button>Ajouter</button>
</form>

</div></div>
</x-app-layout>
