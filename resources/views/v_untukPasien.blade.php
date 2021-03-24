<?php
$slug = 'test';
?>
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner">
            <img src="{{asset('/images/untuk_pasien.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Menghadapi <br> Kanker</h2>
                <p>Pelajari cara perawatan <br> bagi pasien kanker</p>
            </div>
        </div>
        <section class="perawatanKanker__page forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="list__component">
                            @foreach($listingKatArtikel as $row)
                                <div class="row list__component-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        <a href="/untuk-pasien/{{ $row->slug }}">{{ $row->title }}</a>
                                    </div>
                                </div>
                            @endforeach
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
                                <a href="/tentang-kami/{{ $row->slug }}">{{ $row->title }}</a>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a class="{{ request()->is('untuk-pasien') ? 'active' : '' }}" href="/untuk-pasien">Kanker Secara Umum</a>
                            <div class="tab_line {{ request()->is('untuk-pasien') ? '' : 'd-none' }}"></div>
                        </div>
                    </div>
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a href="/untuk-pasien/tahapan-kanker">Tahapan Kanker</a>
                            <div class="tab_line {{ request()->is('untuk-pasien/tahapan-kanker') ? '' : 'd-none' }}"></div>
                        </div>
                    </div>
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a href="/untuk-pasien/bagaimana-kanker-diobati">Bagaimana Kanker Diobati</a>
                            <div class="tab_line {{ request()->is('untuk-pasien/bagaimana-kanker-diobati') ? '' : 'd-none' }}"></div>
                        </div>
                    </div> --}}


                </div>
            </div>
            <div class="col-cs-8">
                <div class="tentangKami__page-intro mb-5">
                    <img class="mb-5" src="{{asset('/images/logo_oneonco_black.png')}}" width="220px" alt="logo-oneonco">
                    <h3>{{ $titlePages }}</h3>
                    <p>{{ $contentPages }}</p>
                </div>
            </div>
        </section>
        <div style="background-color: #e0e0e0;">
            @include('/components/presentational.storyList',[])
        </div>
    </main>
@endsection