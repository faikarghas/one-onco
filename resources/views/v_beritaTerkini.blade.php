
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner forDesktop">
            <img src="{{asset('/images/beritabanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Berita Terkini</h2>
                <p>Artikel terkini untuk Anda</p>
            </div>
        </div>
        <section class="bg-color_lightGrey berita__section">
            <div class="container pt-5 pb-5 ">
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
                            'description'=>'faikar ganteng Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                            'path'=>'berita-terkini/test'
                        ))
                    </div>
                    <div class="col-12 col-md-4">
                        @include('components/presentational.boxNews',array(
                            'date'=>'24 Nov 2020',
                            'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                            'image_url'=>'https://source.unsplash.com/random',
                            'description'=>'faikar Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                            'path'=>'berita-terkini/test'
                        ))
                    </div>
                    <div class="col-12 text-center mt-5">
                        @include('components/presentational.boxShowMore',array(
                            'title'=>'Tampilkan lainnya',
                            'path'=>''
                        ))
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection