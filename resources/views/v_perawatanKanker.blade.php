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
        <section class="perawatanKanker__page forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="perawatanKanker__page-intro mb-5">
                            <h3>Mengenal Nutrisi</h3>
                            <p>Makanan dan Minuman yang baik <br>untuk perawatan kanker.</p>
                        </div>
                        @include('/components/presentational.listContent',['description'=>'Lorem ipsum dolor sit amet obcaecati.','path'=>'/perawatan-kanker/jenis-olahraga',$slug])
                    </div>
                    <div class="col-12 mt-4 mb-5"><hr></div>
                    <div class="col-12">
                        <div class="perawatanKanker__page-intro mb-5">
                            <h3>Olahraga bagi pasien</h3>
                            <p>Pilihan olahraga yang bisa dilakukan <br> oleh pasien kanker</p>
                        </div>
                        @include('/components/presentational.listContent',['description'=>'Lorem ipsum dolor sit amet obcaecati.','path'=>'/perawatan-kanker',$slug])
                    </div>
                </div>
            </div>
        </section>
        <section class="perawatanKanker__pageD tab__menu forDesktop-dflex">
            <div class="col-cs-4">
                <div class="list__component">
                    @foreach($listingKatArtikel as $row)
                                <div class="row list__component-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        <a href="/perawatan-kanker/{{ $row->slug }}">{{ $row->title }}</a>
                                    </div>
                                </div>
                            @endforeach
                    
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
    </main>
@endsection