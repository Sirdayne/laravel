@extends('layouts.main')

@section('content')

    <div class="navigation-title">Административная панель</div>

    <section class="lara-section">
    <div class="wrap">

        <div class="lara-row"><a href="/posts/create">Добавить новость</a></div>
        <div class="lara-row"><a href="/portfolio/create">Добавить картинку в портфолио</a></div>
        <div class="lara-row"><a href="/reviews/create">Добавить отзыв</a></div>

    </div>
    </section>


@endsection