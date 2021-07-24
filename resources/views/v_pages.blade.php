
@extends('components/layouts.layout')
@section('meta')
    {{-- <meta property="og:url"         content="http://www.mypage.de" /> --}}
        <meta property="og:type"        content="website" />
        <meta property='og:title'       content="{{ strip_tags(html_entity_decode($titleContentPages)) }}" />
        <meta property='og:description' content="{{ strip_tags(html_entity_decode(substr($contentPages,0,200))) }}" />
        @switch(Request::segment(1))
        @case('tentang-kami')
            <meta property='og:image' content="{{asset('/images/tentang_kami.jpg')}}">
            @break
        @case('untuk-pasien')
            <meta property='og:image' content="{{asset('/images/menghadapi_kangker.jpg')}}">
            @break
        @case('untuk-pendamping')
            <meta property='og:image' content="{{asset('/images/untuk_pendamping.jpg')}}">
            @break
        @case('partner-kami')
            <meta property='og:image' content="{{asset('/images/partner_kami.jpg')}}">
            @break
        @case('perawatan-kanker')
            <meta property='og:image' content="{{asset('/images/perawatan_kanker.jpg')}}">
            @break
        @case('kanker-payudara')
            <meta property='og:image' content="{{asset('/images/jenis_kanker.jpg')}}">
            @break
        @default
            <meta property='og:image' content="{{asset('/images/perawatan_kanker.jpg')}}">
        @endswitch
@endsection
@section('content')
    @include('components/presentational/header',['path'=>''])
    <main>
        @include('/components/presentational/boxHeaderPages',[])
        <section class="tentangKami__page forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12 forMobile">
                        {{-- <div class="tentangKami__page-intro mb-5">
                            <p>Mempermudah dan mendampingi pasien kanker melalui naik dan turunfnya hidup, itulah nilai utama dari One Onco.</p>
                         </div> --}}
                   </div>
                    <div class="col-12 col-md-6">
                        <div class="list__component">
                            @foreach($listingKatArtikel as $key => $row)
                                <div class="row list__component-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        @switch(Request::segment(1))
                                            @case('tentang-kami')
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('tentang-kami')}}/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('untuk-pasien')
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('untuk-pasien')}}/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('untuk-pendamping')
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('/untuk-pendamping')}}/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('partner-kami')
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('/partner-kami')}}/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('perawatan-kanker')
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('/perawatan-kanker')}}/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('kanker-payudara')
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('/kanker-payudara')}}/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('syaratdanketentuan')
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('/syaratdanketentuan')}}/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('kanker-umum')
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('/kanker-umum')}}/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('kanker-serviks')
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('/kanker-serviks')}}/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('kanker-paru')
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('/kanker-paru')}}/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @case('kanker-kolorektal')
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('/kanker-kolorektal')}}/{{ $row->slug }}">{{ $row->title }}</a>
                                                @break
                                            @default
                                                <a class="{{$key == 0 ? 'active' : ''}}" href="{{url('/syaratdanketentuan')}}/{{ $row->slug }}">{{ $row->title }}</a>
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
                                        <a href="{{url('/belanja-sehat')}}"><img src="{{asset('/images/belanja_sehat_icon.png')}}" alt="logo belanja sehat"></a>
                                        <a href="{{url('/konsultasi-online')}}"><img src="{{asset('/images/konsultasi_online_icon.png')}}" alt="logo belanja sehat"></a>
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
                    <section class="partnerKami__section">
                    @include('/components/presentational.partnerList',[])
                    </section>
                    @break
                @case('syaratdanketentuan')
                    <section class="partnerKami__section">
                    @include('/components/presentational.partnerList',[])
                    </section>
                    @break
                @default
                    @include('/components/presentational.newsList',[])
            @endswitch
        </div>
    </main>
@endsection