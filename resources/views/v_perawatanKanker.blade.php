
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
                        <div class="perawatanKanker__page-intro mb-5">
                            <h3>Mengenal Nutrisi</h3>
                            <p>Makanan dan Minuman yang baik <br>untuk perawatan kanker.</p>
                        </div>
                        <div class="perawatanKanker__page-list">
                                <div class="row perawatanKanker__page-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        <a href="">Jenis sayuran dan kandungan</a>
                                        <p>Lorem ipsum dolor sit amet obcaecati.</p>
                                    </div>
                                </div>
                                <div class="row perawatanKanker__page-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        <a href="">Jenis buah-buahan dan kandungan</a>
                                        <p>Lorem ipsum dolor sit amet obcaecati sit amet obcaecati sit amet obcaecati.</p>
                                    </div>
                                </div>
                                <div class="row perawatanKanker__page-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        <a href="">Cara pengolahan makanan</a>
                                        <p>Lorem ipsum dolor sit amet obcaecati.</p>
                                    </div>
                                </div>
                                <div class="row perawatanKanker__page-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        <a href="">FAQ</a>
                                        <p>Lorem ipsum dolor sit amet obcaecati.</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 mb-5"><hr></div>
                    <div class="col-12">
                        <div class="perawatanKanker__page-intro mb-5">
                            <h3>Olahraga bagi pasien</h3>
                            <p>Pilihan olahraga yang bisa dilakukan <br> oleh pasien kanker</p>
                        </div>
                        <div class="perawatanKanker__page-list">
                                <div class="row perawatanKanker__page-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        <a href="">Jenis olahraga</a>
                                        <p>Lorem ipsum dolor sit amet obcaecati.</p>
                                    </div>
                                </div>
                                <div class="row perawatanKanker__page-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        <a href="">Pola olahraga dirumah</a>
                                        <p>Lorem ipsum dolor sit amet obcaecati sit amet obcaecati sit amet obcaecati.</p>
                                    </div>
                                </div>
                                <div class="row perawatanKanker__page-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        <a href="">Referensi</a>
                                        <p>Lorem ipsum dolor sit amet obcaecati.</p>
                                    </div>
                                </div>
                                <div class="row perawatanKanker__page-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        <a href="">FAQ</a>
                                        <p>Lorem ipsum dolor sit amet obcaecati.</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection