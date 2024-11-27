<x-app-layout>
    grades = <?= $grade->value ?>
    <br>

    <a href="{{ route('courses.grades.edit', ['grade' => $grade, 'course' => $course]) }}">edit</a>
    <a href="{{ route('courses.grades.index', ['course' => $course]) }}">list</a>
    <form action="{{ route('courses.grades.destroy', ['grade' => $grade, 'course' => $course])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
</x-app-layout>