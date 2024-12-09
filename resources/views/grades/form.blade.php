<label for="value">Valeur:</label>
<input name="value" id="value" value="{{ $grade->value }}" class="@error('value') is-invalid @enderror">
<input name="weight" id="weight" value="{{ $grade->weight }}" class="@error('weight') is-invalid @enderror">
@error('value')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<select name="course_id">
    <option value=""></option>
    @foreach ($courses as $course)
        <option value="{{ $course->id }}" @if ($grade->course == $course) selected @endif>{{ $course->name }}</option>
    @endforeach
</select>
<button>Vas-<b>y</b></button>
