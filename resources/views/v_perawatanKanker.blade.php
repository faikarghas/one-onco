
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
                        <?php
                            $slug = 'test';
                        ?>
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
    </main>
@endsection