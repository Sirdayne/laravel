@extends('layouts.main')

@section('content')

     <section class="portfolio-section">
       <div class="wrap">
        
        <div class="portfolio-filters">
            <div class="portfolio-filter pf-active">ВСЕ</div>
            <div class="portfolio-filter">ДЛЯ КУХНИ</div>
            <div class="portfolio-filter">ДЛЯ СПАЛЬНИ</div>
            <div class="portfolio-filter">ДЛЯ ЗАЛА</div>
            <div class="portfolio-filter">ДЛЯ ОФИСА</div>
        </div>
        
        <div class="portfolio-part">
            @foreach($photos as $photo)
                <div class="portfolio-photo portfolio-photo-{{ $photo->category }} pf-active">
                    <a class="portfolio-image-link" href="/images/{{ $photo->image }}" data-lightbox="portfolio-set-{{ $photo->category }}" data-title="Описание фото">
                        <img class="portfolio-image" src="/images/{{ $photo->image }}" alt=""/>
                    </a>
                    @if(auth()->user())
                            <div class="new-options">
                                <a href="/portfolio/destroy/{{ $photo->id }}"><div class="new-delete"></div></a>
                            </div>
                    @endif
                </div>
            @endforeach
        </div>
        
  </section>
@endsection