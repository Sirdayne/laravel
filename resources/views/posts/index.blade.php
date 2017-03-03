@extends('layouts.main')

@section('content')
    <div class="navigation-title">Новости</div>

    <section class="news-section">
        <div class="wrap">
            @foreach($posts as $post)

                <div class="new">
                        <div class="new-img"><img src="/assets/img/jal2.png" alt=""></div>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->description }}</p>
                        
                        <div class="btns-row"><a href="/posts/{{ $post->id }}"><button class="btn-types">Подробнее</button></a></div>
                        <div class="new-date">{{ $post->created_at->toFormattedDateString() }}</div>
                        {{--<div>{{ $post->user->name }}</div>--}}
                </div>
            @endforeach
        </div>
    </section>

@endsection