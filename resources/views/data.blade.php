@extends('layouts.app')

@section('content')
    <h2>Все данные</h2>

    <table border="1">
        <tr>
            <th>Имя</th>
            <th>Email</th>
        </tr>
        @foreach ($data as $entry)
            <tr>
                <td>{{ $entry['name'] }}</td>
                <td>{{ $entry['email'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection

