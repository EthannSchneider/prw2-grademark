<?php
$route = route('grades.store', ['course' => $course->id]);
$method  = 'POST';
?>
@include("grades.forms")