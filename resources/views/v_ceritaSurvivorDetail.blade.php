
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner forDesktop">
            <img src="{{asset('/images/ceritasurvivorbanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Cerita Inspiratif<br/>Kanker Survivor</h2>
                <p>Cerita inspiratif dan survivor kanker,<br>sebagai penyemangat hari Anda.</p>
            </div>
        </div>
        <section class="detail__page1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="detail__page1--img mb-5">
                            <img src="https://source.unsplash.com/random" alt="{{$slug}}-img" height="180px" width="100%">
                        </div>
                        <div class="detail__page1--description mb-5">
                            <h1 class="mb-4">Jenis Sayuran dan Kandungan</h1>
                            <h4>Angelina Ong, cancer survivor 2019</h4>
                            <p class="pagi-init">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sapiente sunt fugiat quis molestias, expedita asperiores, eaque laudantium necessitatibus incidunt recusandae perferendis libero non? Nobis dolorum aperiam est esse tenetur a qui ab quos odit totam rerum, quis perspiciatis porro nihil tempora sequi ex repellendus et quisquam. Quia quidem eum qui, blanditiis aperiam, nobis maxime maiores ratione quis corrupti ipsam consequuntur iure quisquam possimus at voluptatem alias? Qui veniam magnam suscipit officiis et quod officia necessitatibus atque corrupti odio accusantium optio laudantium possimus, dicta consequuntur blanditiis quos ipsam vero nam veritatis eum! Architecto id reprehenderit sit facere eaque placeat iure in similique vero, totam ipsum repellat pariatur dolorum natus itaque tenetur laboriosam iste hic corporis, deleniti qui? Voluptatibus voluptates commodi praesentium molestiae pariatur eius, dolores fugiat! Asperiores est alias tempore sunt aperiam reprehenderit provident quo a. Nostrum commodi vero labore ad molestias consectetur minus. Repellendus illum tenetur excepturi facere voluptatem fugiat praesentium sapiente, corporis enim, minima ipsa consequuntur ad repellat esse? Magnam accusamus exercitationem repellat laudantium ut sint numquam reiciendis neque quo harum excepturi tempore hic commodi minima molestias, alias voluptatibus ipsa </p>
                            <a href="/perawatan-kanker" class="text-green forMobile"><strong><i>List Referensi</i></strong></a>
                        </div>
                        <div class="share_sosmed forDesktop">
                            <p>Apabila informasi ini berguna untuk Anda, <br>bagikan ke keluarga, kerabat, dan teman Anda.</p>
                            <img src="{{asset('/images/fb2-logo.png')}}" alt="fb-logo" width="30px">
                            <img src="{{asset('/images/twitter2-logo.png')}}" alt="twitter-logo" width="30px">
                            <img src="{{asset('/images/wa-logo.png')}}" alt="fb-logo" width="30px">
                        </div>
                    </div>
                    <div class="col-md-4 forDesktop">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="text-center text-lg-start mb-5"><strong>Cerita lainnya</strong></h2>
                                </div>
                                <div class="col-12 mt-4">
                                    @include('components/presentational.boxNews',array(
                                        'date'=>'24 Nov 2020',
                                        'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                                        'image_url'=>'https://source.unsplash.com/random',
                                        'description'=>'',
                                        'author'=>'Angelina Ong, cancer survivor 2019',
                                        'path'=>'/cerita-survivor/test'
                                    ))
                                </div>
                                <div class="col-12 mt-4">
                                    @include('components/presentational.boxNews',array(
                                        'date'=>'24 Nov 2020',
                                        'title'=>'Hidup untuk hari ini, hadapi hari ini',
                                        'image_url'=>'https://source.unsplash.com/random',
                                        'description'=>'',
                                        'author'=>'Angelina Ong, cancer survivor 2019',
                                        'path'=>'/cerita-survivor/test'
                                    ))
                                </div>
                                <div class="col-12 mt-4">
                                    @include('components/presentational.boxNews',array(
                                        'date'=>'24 Nov 2020',
                                        'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                                        'image_url'=>'https://source.unsplash.com/random',
                                        'description'=>'',
                                        'author'=>'Angelina Ong, cancer survivor 2019',
                                        'path'=>'/cerita-survivor/test'
                                    ))
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mt-5 mb-5 forMobile">
                        <div class="share_sosmed">
                            <p>Apabila informasi ini berguna untuk Anda, <br>bagikan ke keluarga, kerabat, dan teman Anda.</p>
                            <img src="{{asset('/images/fb2-logo.png')}}" alt="fb-logo" width="30px">
                            <img src="{{asset('/images/twitter2-logo.png')}}" alt="twitter-logo" width="30px">
                            <img src="{{asset('/images/wa-logo.png')}}" alt="fb-logo" width="30px">
                        </div>
                    </div>
                    <div class="col-12 text-center forMobile">
                        @include('components/presentational.boxShowMore',array(
                            'title'=>'Cerita Lainnya',
                            'path'=>''
                        ))
                    </div>
                </div>
            </div>
        </section>
        @include('/components/presentational.newsList',[])
    </main>
@endsection