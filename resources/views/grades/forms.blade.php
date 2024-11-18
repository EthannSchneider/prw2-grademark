<form action="{{ $route }}" method="POST" class="flex flex-col align-items-center justify-center">
    @csrf
    @method($method)

    <input required name="value" type="number" value="{{ $grade->value }}">

    <input type="submit" name="submit" value="Submit"/>
</form>