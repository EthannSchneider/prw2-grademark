<x-app-layout>
    <?php
    $route = route('courses.grades.update', ['grade' => $grade, 'course' => $course]);
    $method  = 'PUT';
    ?>
    @include("grades.forms")
</x-app-layout>