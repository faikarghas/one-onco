
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner">
            <img src="{{asset('/images/perkankerbanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Solusi Total<br>Onkologi</h2>
            </div>
        </div>
        <section class="tentangKami__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tentangKami__page-intro mb-5">
                            <p>Mempermudah dan mendampingi pasien kanker melalui naik dan turunfnya hidup, itulah nilai utama dari One Onco.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="list__component">
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/tentang-kami/tentang">Tentang Kami</a>
                                </div>
                            </div>
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/tentang-kami/nilai">Nilai-nilai Kami</a>
                                </div>
                            </div>
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/tentang-kami/kolaborasi">Kolaborasi sebagai <br> semangat ONEOnco</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 mb-5"><hr></div>
                    <div class="col-12">
                        <div class="text-center mb-5">
                            <img src="{{asset('/images/kalbe.png')}}" width="180px" alt="" srcset="">
                        </div>
                        <div class="tentangKami__page-intro mb-5">
                            <h3>SEJARAH KALBE</h3>
                            <p>Pilihan olahraga yang bisa dilakukan <br> oleh pasien kanker</p>
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