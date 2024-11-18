<form action="{{ route('grades.update', $grade) }}" method="post">
    @csrf
    @method('put')
    @include('grades.form')
</form>
