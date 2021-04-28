
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner">
            <img src="{{asset('/images/tentang_kami.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Tentang Kami</h2>
            </div>
        </div>
        <section class="tentangKami__page forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12 forMobile">
                        <div class="tentangKami__page-intro mb-5">
                            <p>Mempermudah dan mendampingi pasien kanker melalui naik dan turunfnya hidup, itulah nilai utama dari One Onco.</p>
                         </div>
                   </div>
                    <div class="col-12 col-md-6">
                        <div class="list__component">
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
                    </div>
                    <div class="col-12 mt-4 mb-5 forMobile"><hr></div>
                    <div class="col-12 col-md-6">
                        <div class="text-center mb-5">
                            <img src="{{asset('/images/kalbe.png')}}" width="180px" alt="" srcset="">
                        </div>
                        <div class="tentangKami__page-intro mb-5">
                            <h3>{{ $titlePages }}</h3>
                            <p>{{ $contentPages }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tab__menu forDesktop-dflex">
            <div class="col-cs-4">
                <div class="list__component">
                @foreach($listingKatArtikel as $row)
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            {{-- <a class="{{ request()->is('tentang-kami') ? 'active' : '' }}" href="/tentang-kami/{{ $row->slug }}">{{ $row->title }}</a>
                            @if ( $row->slug ==='' ) 
                               <div class="tab_line {{ request()->is('tentang-kami') ? '' : 'd-none' }}"></div>
                            @endif --}}
                            <a href="/tentang-kami/{{ $row->slug }}">{{ $row->title }}</a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="col-cs-8">
                <div class="tentangKami__page-intro mb-5">
                    <img class="mb-5" src="{{asset('/images/logo_oneonco_black.png')}}" width="220px" alt="logo-oneonco">
                    <h3>{{ $titlePages }}</h3>
                    <p>{!! $contentPages !!}<p>
                </div>
            </div>
        </section>
        <div style="background-color: #e0e0e0;">
            {{-- <div class="container">
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
                                'date'=>$row->created_at,
                                'title'=>$row->title,
                                'image_url'=>'https://source.unsplash.com/random',
                                'description'=>$row->shortContent,
                                'path'=>'berita-terkini/'.$row->slug
                        ))
                    </div>
                    @endforeach
                </div>
            </div> --}}
            @include('/components/presentational.newsList',[])
        </div>
    </main>
@endsection