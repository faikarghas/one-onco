@extends('components/layouts.layout')
@section('meta')
    {{-- <meta property="og:url"         content="http://www.mypage.de" /> --}}
        <meta property="og:type"        content="website" />
        <meta property='og:title'       content="{{ strip_tags(html_entity_decode($titlePages)) }}" />
        <meta property='og:description' content="{{ strip_tags(html_entity_decode(substr($Content,0,200))) }}" />
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
    @include('components/presentational/header',['path'=>'tentang-kami'])
    <main>
        @include('/components/presentational/boxHeaderPages',[])
        <section class="tentangKami__page forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tentangKami__page-content">
                            <h1><strong>{{ $titlePages }}</strong></h1>
                            <p>{!! $Content !!}</p>
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
                            <a href="{{url('/tentang-kami')}}/{{ $row->slug }}">{{ $row->title }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="tab__menu forDesktop-dflex">
            @include('/components/presentational/boxSideMenuPagesDesktop',[])
            @include('/components/presentational/boxContentPagesDesktop',[])
        </section>
    </main>
@endsection