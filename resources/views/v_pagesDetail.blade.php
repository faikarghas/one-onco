
@extends('components/layouts.layout')

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
        <section class="tab__menu forDesktop-dflex">
            @include('/components/presentational/boxSideMenuPagesDesktop',[])
            @include('/components/presentational/boxContentPagesDesktop',[])
        </section>
    </main>
@endsection