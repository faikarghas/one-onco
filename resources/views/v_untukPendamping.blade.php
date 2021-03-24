<?php
$slug = 'test';
?>
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner">
            <img src="{{asset('/images/perPendamping.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Persiapan <br> untuk Pendamping</h2>
                <p>Membantu perndamping untuk memahami <br> penderita kanker dan keluarga</p>
            </div>
        </div>
        <section class="perawatanKanker__page forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="list__component">
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/untuk-pendamping/jenis-olahraga">Mengolah Emosi</a>
                                    <p>Mengatasi efek samping emosional dari kanker dan pengobatan.</p>
                                </div>
                            </div>
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/untuk-pendamping/jenis-olahraga">Merawat yang Terkasih</a>
                                    <p>Kiat tentang perawatan dan mengatasinya.</p>
                                </div>
                            </div>
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/untuk-pendamping/jenis-olahraga">Manajemen Perawatan</a>
                                    <p>Temukan cara terbaik dan efisien dalam perawatan kanker.</p>
                                </div>
                            </div>
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/untuk-pendamping/jenis-olahraga">Pengaruh Fisik, Emosional, dan Sosial</a>
                                    <p>Cari tau mengenai perawatan paliatif dan perawatan suportif. Berfokus pada pengurangan gejala, meningkatkan kualitas hidup, dan mendukung pasien dan keluarganya.</p>
                                </div>
                            </div>
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
                            <a class="{{ request()->is('untuk-pendamping') ? 'active' : '' }}" href="/untuk-pendamping/{{ $row->slug }}">{{ $row->title }}</a>
                            @if ( $row->slug ==='' ) 
                               <div class="tab_line {{ request()->is('untuk-pendamping') ? '' : 'd-none' }}"></div>
                            @endif
                        </div>
                    </div>
                @endforeach
                    {{-- <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a class="{{ request()->is('untuk-pendamping') ? 'active' : '' }}" href="/untuk-pendamping">Mengolah Emosi</a>
                            <div class="tab_line {{ request()->is('untuk-pendamping') ? '' : 'd-none' }}"></div>
                        </div>
                    </div>
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a class="{{ request()->is('untuk-pendamping/merawat-yang-terkasih') ? 'active' : '' }}" href="/untuk-pendamping/merawat-yang-terkasih">Merawat yang Terkasih</a>
                            <div class="tab_line {{ request()->is('untuk-pendamping/merawat-yang-terkasih') ? '' : 'd-none' }}"></div>
                        </div>
                    </div>
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a class="{{ request()->is('untuk-pendamping/manajemen-perawatan') ? 'active' : '' }}" href="/untuk-pendamping/manajemen-perawatan">Manajemen Perawatan</a>
                            <div class="tab_line {{ request()->is('untuk-pendamping/manajemen-perawatan') ? '' : 'd-none' }}"></div>
                        </div>
                    </div>
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a class="{{ request()->is('untuk-pendamping/pengaruh-fisik') ? 'active' : '' }}" href="/untuk-pendamping/pengaruh-fisik">Pengaruh Fisik, Emosional, dan Sosial</a>
                            <div class="tab_line {{ request()->is('untuk-pendamping/pengaruh-fisik') ? '' : 'd-none' }}"></div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-cs-8">
                <div class="tentangKami__page-intro mb-5">
                    <img class="mb-5" src="{{asset('/images/logo_oneonco_black.png')}}" width="220px" alt="logo-oneonco">
                    <h3>{{ $titlePages }}</h3>
                    <p>{{ $contentPages }}<p>
                </div>
            </div>
        </section>
        <div style="background-color: #e0e0e0;">
            @include('/components/presentational.storyList',[])
        </div>
    </main>
@endsection