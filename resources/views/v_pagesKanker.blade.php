
@extends('components/layouts.layout')
@section('content')
    @include('components/presentational/header',['path'=>''])
    <main>
        @include('/components/presentational/boxHeaderPages',[])
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
                                        @switch(Request::segment(1))
                                            @case('tentang-kami')
                                                <a href="/tentang-kami/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('untuk-pasien')
                                                <a href="/untuk-pasien/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('untuk-pendamping')
                                                <a href="/untuk-pendamping/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('partner-kami')
                                                <a href="/partner-kami/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('syaratdanketentuan')
                                                @include('/components/presentational.partnerList',[])
                                                <a href="/syaratdanketentuan/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @default
                                                <a href="/syaratdanketentuan/{{ $row->slug }}">{{ $row->title }}</a>
                                        @endswitch
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 mt-4 mb-5 forMobile"><hr></div>
                    <div class="col-12 col-md-6">
                        <div class="tentangKami__page-intro mb-5">
                            <h3>{!! $titleContentPages !!}</h3>
                            <p>{!! $contentPages !!}</p>
                        </div>
                        <div class="share_sosmed">
                            <div class="share_sosmed-link">
                                <p>Apabila informasi ini berguna untuk Anda, <br>bagikan ke keluarga, kerabat, dan teman Anda.</p>
                                <a href="https://facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank" rel="noopener"">
                                    <img src="{{asset('/images/fb2-logo.png')}}" alt="fb-logo" width="30px">
                                </a>
                                <a href="https://twitter.com/intent/tweet/?text={{$titleContentPages}}&url={{url()->full()}}" target="_blank" rel="noopener" aria-label="">
                                    <img src="{{asset('/images/twitter2-logo.png')}}" alt="twitter-logo" width="30px">
                                </a>
                                <a href="https://wa.me/?text={{url()->full()}}" target="_blank" rel="noopener">
                                    <img src="{{asset('/images/wa-logo.png')}}" alt="fb-logo" width="30px">
                                </a>
                            </div>
                            <div class="share_sosmed-act">
                                <ul>
                                    <li>
                                        <a href="/belanja-sehat"><img src="{{asset('/images/belanja_sehat_icon.png')}}" alt="logo belanja sehat"></a>
                                        <a href="/konsultasi-online"><img src="{{asset('/images/konsultasi_online_icon.png')}}" alt="logo belanja sehat"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tab__menu forDesktop-dflex">
          @include('/components/presentational/boxSideMenuPagesDesktop',[])
          @include('/components/presentational/boxContentPagesDesktop',[])
        </section>
        <div style="background-color: #e0e0e0;" class="pt-5 pb-5">
            @switch(Request::segment(1))
                @case('tentang-kami')
                    @include('/components/presentational.newsList',[])
                    @break
                @case('untuk-pasien')
                    @include('/components/presentational.storyList',[])
                    @break
                @case('untuk-pendamping')
                    @include('/components/presentational.storyList',[])
                    @break
                @case('partner-kami')
                    @include('/components/presentational.partnerList',[])
                    @break
                @case('syaratdanketentuan')
                    @include('/components/presentational.partnerList',[])
                    @break
                @case('jenis-kanker')
                    @include('/components/presentational.partnerList',[])
                    @break
                @default
                    @include('/components/presentational.newsList',[])
            @endswitch
        </div>
    </main>
@endsection