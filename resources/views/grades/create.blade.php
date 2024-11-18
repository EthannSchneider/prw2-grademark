<form action="{{ route('grades.store') }}" method="post">
    @csrf
    @include('grades.form')
</form>
