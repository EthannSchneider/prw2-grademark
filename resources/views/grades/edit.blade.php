<x-app-layout>
    <?php
    $route = route('grades.update', ['grade' => $grade, 'course' => $course]);
    $method  = 'PUT';
    ?>
    @include("grades.forms")
</x-app-layout>