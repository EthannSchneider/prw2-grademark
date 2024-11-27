<x-app-layout>
    <?php
    $route = route('courses.grades.store', ['course' => $course]);
    $method  = 'POST';
    ?>
    @include("grades.forms")
</x-app-layout>