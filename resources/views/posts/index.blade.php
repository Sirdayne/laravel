@extends('layouts.main')

@section('content')

    <h2>Laratitle</h2>

    @foreach($posts as $post)

        <a href="/posts/{{ $post->id }}"><h1>{{ $post->title }}</h1>
        </a>
        <p>{{ $post->body }}</p>
        <p>{{ $post->user->name }}</p>
        <span>{{ $post->created_at->toFormattedDateString() }}</span>

    @endforeach

@endsection