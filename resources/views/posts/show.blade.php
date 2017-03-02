@extends('layouts.main')

@section('content')

    <h3>{{ $post->title }}</h3>
    <p>{{ $post->body }}</p>
    <p>{{ $post->user->name }}</p>

    @foreach ($post->comments as $comment)

        <h4>Comment: {{ $comment->body }} </h4>
        <p>Posted: {{ $comment->created_at->diffForHumans()  }}</p>


    @endforeach

    {{--
    <form method="POST" action="/posts/{{ $post->id }}/comments">
        {{ csrf_field() }}
        <textarea name="body" placeholder="Text"></textarea>
        <button type="submit">Submit</button>
    </form>
    --}}


@endsection