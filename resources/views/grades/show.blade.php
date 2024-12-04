<x-app-layout>
    grades = <?= $grade->value ?>
    <br>

    <a href="{{ route('grades.edit', ['grade' => $grade]) }}">edit</a>
    <a href="{{ url()->previous() }}">back</a>
    <form action="{{ route('grades.destroy', ['grade' => $grade])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
</x-app-layout>