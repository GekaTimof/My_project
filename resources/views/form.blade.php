@extends('layouts.app')

@section('content')
    <h2>Fill the form</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form method="POST" action="/submit-form">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <button type="submit">Send</button>
    </form>
@endsection

