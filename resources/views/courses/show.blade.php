<x-app-layout>
    grades = <?= $course->name ?>
    <br>

    <a href="{{ route('courses.edit', $course->id) }}">edit</a>
    <a href="{{ route('courses.index') }}">list</a>
    <a href="{{ route('courses.grades.index', $course->id) }}">grades</a>
    <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
</x-app-layout>