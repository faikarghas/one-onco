
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <section class="detail__page1">
            <div class="container">
                <div class="row">
                    <div class="col-12 fix-top">
                        <p class="text-center h5"><strong>CARI KATEGORI KANKER SESUAI SISTEM TUBUH</strong></p>
                        <div class="cari_kanker">
                            <a href="/sistem-tubuh">
                                <ul>
                                    <li><i>Pilih</i></li>
                                    <li> <img src="{{asset('/images/arrow-white.png')}}" alt="arrow" width="10px"></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="box__banner">
            <img src="{{asset('/images/ceritasurvivorbanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Cerita Inspiratif<br/>Kanker Survivor</h2>
                <p>Cerita inspiratif dan survivor kanker,<br>sebagai penyemangat hari Anda.</p>
            </div>
        </div>
        @include('/components/presentational.storyList',[])
        @include('/components/presentational.newsList',[])
    </main>
@endsection