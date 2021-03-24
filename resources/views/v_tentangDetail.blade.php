
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'tentang-kami'])

    <main>
        <div class="box__banner">
            <img src="{{asset('/images/solusiOnkologiBanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Solusi Total<br>Onkologi</h2>
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
                    <div class="col-12">
                        <h2 class="text-center"><strong>BERITA TERKINI</strong></h2>
                        <p class="text-center mb-5"><i>Yang terbaru mengenai dunia onkologi</i></p>
                    </div>
                    <div class="col-12 col-md-4">
                        @include('components/presentational.boxNews',array(
                            'date'=>'24 Nov 2020',
                            'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                            'image_url'=>'https://source.unsplash.com/random',
                            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                            'path'=>'/berita-terkini/test'
                        ))
                    </div>
                    <div class="col-12 col-md-4">
                        @include('components/presentational.boxNews',array(
                            'date'=>'24 Nov 2020',
                            'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                            'image_url'=>'https://source.unsplash.com/random',
                            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                            'path'=>'/berita-terkini/test'
                        ))
                    </div>
                    <div class="col-12 text-center mt-5">
                        @include('components/presentational.boxShowMore',array(
                            'title'=>'Tampilkan lainnya',
                            'path'=>'/berita-terkini'
                        ))
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection