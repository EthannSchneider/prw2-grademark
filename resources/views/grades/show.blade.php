<x-app-layout>
    grades = <?= $grade->value ?>
    <br>

    <a href="{{ route('grades.edit', ['grade' => $grade->id, 'course' => $course->id]) }}">edit</a>
    <a href="{{ route('grades.index', ['course' => $course->id]) }}">list</a>
    <form action="{{ route('grades.destroy', ['grade' => $grade->id, 'course' => $course->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
</x-app-layout>