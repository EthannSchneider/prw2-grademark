<label for="value">Valeur:</label>
<input name="value" id="value" value="{{ $grade->value }}" class="@error('value') is-invalid @enderror">
@error('value')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<button>Vas-<b>y</b></button>
