<x-app-layout>
    <?php
        $route = route('courses.store');
        $method  = 'POST';
    ?>
    @include("courses.forms")
</x-app-layout>
