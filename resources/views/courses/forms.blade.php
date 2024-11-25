<form action="{{ $route }}" method="POST" class="flex flex-col align-items-center justify-center">
    @csrf
    @method($method)

    <input required name="name" value="{{ $course-> name }}">

    <input type="submit" name="submit" value="Submit"/>
    @error('value')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</form>