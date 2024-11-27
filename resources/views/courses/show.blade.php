<x-app-layout>
    grades = <?= $course->name ?>
    <br>

    <a href="{{ route('courses.edit', $course) }}">edit</a>
    <a href="{{ route('courses.index') }}">list</a>
    <a href="{{ route('courses.grades.index', $course) }}">grades</a>
    <form action="{{ route('courses.destroy', $course) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
</x-app-layout>