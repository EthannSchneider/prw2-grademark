<x-app-layout>
    <?php
    $route = route('grades.update', ['grade' => $grade]);
    $method  = 'PUT';
    ?>
    @include("grades.forms")
</x-app-layout>