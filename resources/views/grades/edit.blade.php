<form action="{{ route('courses.grades.update', [$course, $grade]) }}" method="post">
    @csrf
    @method('put')
    @include('grades.form')
</form>
