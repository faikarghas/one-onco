
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
          @include('/components/presentational/boxSideMenuPagesDesktop',[])
          @include('/components/presentational/boxContentPagesDesktop',[])
        </section>
        <div style="background-color: #e0e0e0;">
            
            {{-- @include('/components/presentational.newsList',[]) --}}
        </div>
    </main>
@endsection