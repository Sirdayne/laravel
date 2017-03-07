@extends('layouts.main')

@section('content')

    <div class="navigation-title">
        {{ $post->title }}
    </div>
            
    <section class="new-inner">
        
        <div class="wrap">
           
            <img src="/images/{{ $post->image }}" alt="">
            <div class="new-inner-date">02.02.2017</div>
            
            <p>{{ $post->body }}</p>
            <!--
            <div class="share">
                <div class="share-block">
                    <div class="share-txt">Поделиться:</div>
                    <div class="share-icons">
                        <div class="share-vk"></div>
                        <div class="share-fb"></div>
                        <div class="share-tw"></div>
                    </div>
                </div>
            </div>
            -->
            {{--<p>{{ $post->user->name }}</p>--}}

            <div class="new-navigation">
                <!--<a href=""><div class="new-prev"><img src="/assets/img/arrow-left.png" alt=""><span class="new-nav">Пред.</span></div></a>-->
                <div class="new-all"><a href="/posts"><button class="btn-types">Все новости</button></a></div>
                <!--<a href=""><div class="new-next"><img src="/assets/img/arrow-right.png" alt=""><span class="new-nav">След.</span></div></a>-->
            </div>
            <!--
            <div class="similar-news">
                <div class="sn-title">ЧИТАЙТЕ ТАКЖЕ</div>
                
                <div class="sn-new">
                    <div class="sn-img"><img src="/assets/img/jal2.png" alt=""></div>
                    <h4>Заголовок статьи</h4>
                    
                    <div class="sn-btn"><button class="btn-types-white">Подробнее</button></div>
                </div>
                <div class="sn-new">
                    <div class="sn-img"><img src="/assets/img/jal2.png" alt=""></div>
                    <h4>Заголовок статьи</h4>
                    
                    <div class="sn-btn"><button class="btn-types-white">Подробнее</button></div>
                </div>
                <div class="sn-new">
                    <div class="sn-img"><img src="/assets/img/jal2.png" alt=""></div>
                    <h4>Заголовок статьи</h4>
                    
                    <div class="sn-btn"><button class="btn-types-white">Подробнее</button></div>
                </div>
                
            </div>
            -->
        </div>
        
    </section>

    <!-- COMMENTS HERE -->
    {{--
    @foreach ($post->comments as $comment)

        <h4>Comment: {{ $comment->body }} </h4>
        <p>Posted: {{ $comment->created_at->diffForHumans()  }}</p>


    @endforeach

    <form method="POST" action="/posts/{{ $post->id }}/comments">
        {{ csrf_field() }}
        <textarea name="body" placeholder="Text"></textarea>
        <button type="submit">Submit</button>
    </form>
    --}}


@endsection