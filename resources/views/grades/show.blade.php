<x-app-layout>
    <p>grades = <?= $grade->value ?></p> 
    <p>course = <?= $grade->course->name ?></p>
    <p>weight = <?= $grade->weight ?></p>
    @if (!$is_mine) 
        <p>user = <?= $grade->user->name ?></p>
    @endif
    <br>

    @if ($is_mine)
        <a href="{{ route('grades.download', ['grade' => $grade]) }}">download</a>
        <a href="{{ route('grades.edit', ['grade' => $grade]) }}">edit</a>
        <form action="{{ route('grades.destroy', ['grade' => $grade])}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
    @endif
</x-app-layout>