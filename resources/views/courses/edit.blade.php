<x-app-layout>
    <?php
        $route = route('courses.update', ['course' => $course]);
        $method  = 'PUT';
    ?>
    @include("courses.forms")
</x-app-layout>