
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner forDesktop">
            <img src="{{asset('/images/perkankerbanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Perawatan <br> Kanker</h2>
                <p>Pelajari cara perawatan <br> bagi pasien kanker</p>
            </div>
        </div>
        <section class="detail__page1 forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="detail__page1--img mb-5">
                            <img src="https://source.unsplash.com/random" alt="{{$slugStory}}-img" height="180px" width="100%">
                        </div>
                        <div class="detail__page1--description mb-5">
                            <h1><strong>{{ $title }}</strong></h1>
                            <p>{{ $Content }}</p>
                        </div>
                        @include('/components/presentational.listContent',[])
                    </div>
                </div>
            </div>
        </section>
        <section class="perawatanKanker__pageD tab__menu forDesktop-dflex">
            <div class="col-cs-4">
                <div class="list__component">
                    @foreach($listingKatArtikel as $row)
                        <div class="row list__component-list--item">
                            <div class="col-1">
                                <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                            </div>
                            <div class="col-11 ps-4">
                                <a class="{{ Request::segment(2) == $row->slug ? '' : 'active' }}" href="/perawatan-kanker/{{ $row->slug }}">{{ $row->title }}</a>
                                <div class="tab_line {{ Request::segment(2) == $row->slug ? '' : 'd-none' }}"></div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-cs-8">
                <div class="tentangKami__page-intro mb-5">
                    <img class="mb-5" src="{{asset('/images/logo_oneonco_black.png')}}" width="220px" alt="logo-oneonco">
                    <h3>{{ $titlePages }}</h3>
                    <p>{{ $Content }}</p>
                </div>
            </div>
        </section>
        @include('/components/presentational.newsList',[])
    </main>
@endsection