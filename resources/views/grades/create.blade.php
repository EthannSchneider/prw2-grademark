<form action="{{ route('courses.grades.store', $course) }}" method="post">
    @csrf
    @include('grades.form')
</form>
