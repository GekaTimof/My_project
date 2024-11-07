@extends('layouts.app')

@section('content')
    <h2>data form</h2>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="/form" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">send</button>
    </form>
@endsection

