
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'tentang-kami'])

    <main>
        <div class="box__banner">
            <img src="{{asset('/images/solusiOnkologiBanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Tentang Kami</h2>
            </div>
        </div>
        <section class="tentangKami__page forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tentangKami__page-content">
                            <h1><strong>{{ $titlePages }}</strong></h1>
                            <p>{{ $Content }}</p>
                        </div>
                        <hr class="mt-5 mb-5">
                    </div>
                </div>
                @foreach($listingKatArtikel as $row)
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a href="/tentang-kami/{{ $row->slug }}">{{ $row->title }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="tentangKami__pageD tab__menu forDesktop-dflex">
            <div class="col-cs-4">
                <div class="list__component">
                @foreach($listingKatArtikel as $row)
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a class="{{ Request::segment(2) == $row->slug ? '' : 'active' }}" href="/tentang-kami/{{ $row->slug }}">{{ $row->title }}</a>
                            <div class="tab_line {{ Request::segment(2) == $row->slug ? '' : 'd-none' }}"></div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-cs-8">
                <div class="mb-5">
                    <img src="{{asset('/images/kalbe.png')}}" width="180px" alt="" srcset="">
                </div>
                <div class="tentangKami__page-intro mb-5">
                    <h3>{{ $titlePages }}</h3>
                    <p>{{ $Content }}</p>
                </div>
            </div>
        </section>
        <section class="berita__section" style="background-color: #e0e0e0;">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between mb-5">
                        <div>
                            <h2 class="text-center"><strong>BERITA TERKINI</strong></h2>
                            <p class="text-center"><i>Yang terbaru mengenai dunia onkologi</i></p>
                        </div>
                        @include('components/presentational.boxShowMore',array(
                            'title'=>'Lihat semua',
                            'path'=>'berita-terkini'
                        ))
                    </div>
                    @foreach($listingNews as $row)
                    <div class="col-12 col-md-4">
                        @include('components/presentational.boxNews',array(
                            'date'=>$row->createdAt,
                                'title'=>$row->title,
                                'image_url'=>'https://source.unsplash.com/random',
                                'description'=>$row->shortContent,
                                'path'=>'berita-terkini/'.$row->slug
                        ))
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection