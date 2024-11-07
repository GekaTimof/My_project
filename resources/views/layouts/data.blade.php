@extends('layouts.app')

@section('content')
    <h2>All data</h2>

    <table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $entry)
                <tr>
                    <td>{{ $entry['name'] }}</td>
                    <td>{{ $entry['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

