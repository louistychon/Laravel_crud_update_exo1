@extends('layout.index')
@section('content')
    <h2>Animal selected</h2>
    <ul>
        <li>id: {{ $id_show->id }}</li>
        <li>genre: {{ $id_show->genre }}</li>
        <li>age: {{ $id_show->age }}</li>
        <li>
            <form action="/{{ $id_show->id }}/delete" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        <li>
            <button><a href="/{{ $id_show->id }}/edit">edit</a></button>
        </li>
    </ul>
@endsection
