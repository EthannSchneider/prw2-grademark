<?php
    $route = route('courses.update', ['course' => $course]);
    $method  = 'PUT';
?>
@include("courses.forms")
