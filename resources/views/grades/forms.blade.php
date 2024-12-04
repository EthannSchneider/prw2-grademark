<form action="{{ $route }}" method="POST" class="flex flex-col align-items-center justify-center">
    @csrf
    @method($method)

    <input required name="value" type="number" step=".1" min="1" max="6" value="{{ $grade->value }}">
    <input required name="weight" type="number" step=".1" min="0" max="1" value="{{ $grade->weight }}">

    <input type="submit" name="submit" value="Submit"/>
    @error('value')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</form>