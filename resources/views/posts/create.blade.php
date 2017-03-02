@extends('layouts.main')

@section('content')

    <h2>Create a post</h2>

    @if (count($errors))
    <div>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>

        @endforeach
    </div>
    @endif

    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Title">
        <textarea name="body" placeholder="Text"></textarea>
        <button type="submit">Submit</button>
    </form>


@endsection