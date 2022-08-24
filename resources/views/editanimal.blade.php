@extends('layout.index')
@section('content')
    <form action="/{{$animalid->id}}/edit" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="genre" value={{$animalid->genre}}>
        <input type="number" name="age" value={{$animalid->age}}>
        <button type="submit">save</button>
    </form>
@endsection
