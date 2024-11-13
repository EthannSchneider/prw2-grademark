<form action="{{ route('grades.store') }}" method="post">
    @csrf
    <label for="value">Valeur:</label>
    <input type="number" name="value" min="0" max="6" id="value">
    <button>Vas-<b>y</b></button>
</form>
