@extends('layouts.main')

@section('content')

    <div class="navigation-title">Новая новость</div>

    <section class="lara-section">
    <div class="wrap">

    <h3>Введите данные новости в форму</h3>


    @if (count($errors))
    <div>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>

        @endforeach
    </div>
    @endif

    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Заголовок">
        <input type="file" name="image">
        <textarea name="description" placeholder="Краткое описание"></textarea>
        <textarea name="body" placeholder="Напишите новость..."></textarea>
        <button type="submit">Отправить</button>
    </form>

    </div>
    </section>


@endsection