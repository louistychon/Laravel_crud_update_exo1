@extends('layout.index')
@section('content')
<form action="create" method="POST">
    @csrf
    <input type="text" name="genre">
    <input type="number" name="age">
    <button type="submit">Submit</button>
</form>
@endsection
