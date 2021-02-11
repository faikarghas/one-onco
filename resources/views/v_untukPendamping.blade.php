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
        <section class="perawatanKanker__page">
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
        <section class="berita__section">
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
                            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum'
                        ))
                    </div>
                    <div class="col-12 col-md-4">
                        @include('components/presentational.boxNews',array(
                            'date'=>'24 Nov 2020',
                            'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                            'image_url'=>'https://source.unsplash.com/random',
                            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum'
                        ))
                    </div>
                    <div class="col-12 text-center mt-5">
                        @include('components/presentational.boxShowMore',array(
                            'title'=>'Tampilkan lainnya'
                        ))
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection