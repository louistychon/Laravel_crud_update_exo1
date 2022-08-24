@extends('layout.index')
@section('content')
    <h1>ALL ANIMALS</h1>
    <table style="border:1px solid black; margin: 10px; padding:10px;">
        <thead>
            <th>id</th>
            <th>genre</th>
            <th>age</th>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
                <tr>

                    <td> <a href="{{ $animal->id }}/show">{{ $animal->id }}</a></td>
                    <td><a href="{{ $animal->id }}/show">{{ $animal->genre }}</a></td>
                    <td><a href="{{ $animal->id }}/show">{{ $animal->age }}</a></td>
                </tr>
            @endforeach
            <tr>
                <td><a href="{{ route('addanimal') }}"><button>add animal</button></a></td>
            </tr>
        </tbody>
    </table>
@endsection
