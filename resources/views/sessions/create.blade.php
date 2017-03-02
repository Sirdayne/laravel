@extends('layouts.main')

@section('content')

    <h1>Sign in</h1>

    @if (count($errors))
        <div>
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>

            @endforeach
        </div>
    @endif

    <form method="POST" action="/login">
        {{ csrf_field() }}
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">

        <button type="submit">Submit</button>
    </form>

@endsection