<x-app-layout>
    <?php
    $route = route('courses.grades.store', ['course' => $course->id]);
    $method  = 'POST';
    ?>
    @include("grades.forms")
</x-app-layout>