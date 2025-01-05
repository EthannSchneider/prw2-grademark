<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-4 lg:px-4 mt-4"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

<h2>Plans d'étude</h2>

<ul>
@foreach ($studyPlans as $studyPlan)
  <li>
    <a href="{{ route('study_plans.show', $studyPlan) }}">{{ $studyPlan->name }}</a>
  </li>
@endforeach
</ul>

</div></div>
</x-app-layout>
