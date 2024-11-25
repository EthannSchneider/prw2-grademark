<?php
$route = route('grades.update', ['grade' => $grade, 'course' => $course]);
$method  = 'PUT';
?>
@include("grades.forms")