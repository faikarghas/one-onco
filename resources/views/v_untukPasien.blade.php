<?php
$slug = 'test';
?>
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner">
            <img src="{{asset('/images/perkankerbanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Perawatan <br> Kanker</h2>
                <p>Pelajari cara perawatan <br> bagi pasien kanker</p>
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
                                    <a href="/untuk-pasien/jenis-olahraga">Kanker Secara Umum</a>
                                    <p>Memahami penyakit kanker, tim perawatan kesehatan, dan istilah umum yang sering digunakan.</p>
                                </div>
                            </div>
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/untuk-pasien/jenis-olahraga">Tahapan Kanker</a>
                                    <p>Pelajari tahapan kanker dalam tubuh</p>
                                </div>
                            </div>
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/untuk-pasien/jenis-olahraga">Bagaimana Kanker Diobati</a>
                                    <p>Temukan cara terbaik dan efisien dalam perawatan kanker</p>
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
                            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                            'path'=>'berita-terkini'
                        ))
                    </div>
                    <div class="col-12 col-md-4">
                        @include('components/presentational.boxNews',array(
                            'date'=>'24 Nov 2020',
                            'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                            'image_url'=>'https://source.unsplash.com/random',
                            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                            'path'=>'berita-terkini'
                        ))
                    </div>
                    <div class="col-12 text-center mt-5">
                        @include('components/presentational.boxShowMore',array(
                            'title'=>'Tampilkan lainnya',
                            'path'=>'berita-terkini'
                        ))
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection