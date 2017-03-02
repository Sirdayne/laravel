@extends('layouts.main')

@section('content')

    <h1>Register</h1>

    @if (count($errors))
        <div>
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>

            @endforeach
        </div>
    @endif

    <form method="POST" action="/register">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmation" placeholder="Confirm password">

        <button type="submit">Submit</button>
    </form>

@endsection