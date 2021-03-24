
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner forDesktop">
            <img src="{{asset('/images/jurnalbanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
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
                            <h1 class="mb-4">{{ $title }}</h1>
                            <p class="pagi-init">{!!  $contentStory !!} </p>
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
                                <div class="col-12">
                                    <div class="boxNewsWimg mt-4">
                                        <div class="boxInformation">
                                            <div class="title">
                                                <span>15 Jan 2021</span>
                                                <h3 class="mt-2 mb-4">Harus bagaimana? efek C-19 terhadap pasien kanker di Indonesia.</h3>
                                            </div>
                                            @include('components/presentational.boxReadMore',array('title'=>'Baca Selengkapnya','path'=>''))
                                        </div>
                                    </div>
                                </div>
                                



                            </div>
                        </div>
                    </div>
                    <div class="col-12 forMobile">
                        <div class="pagination__wrapper">
                            <span>Halaman</span>
                            <div class="pagination__wrapper-button">
                                <div class="page_number">
                                </div>
                                <div class="show_all"><p>Show all</p> <img src="{{asset('/images/arrow-white.png')}}" alt="arrow" width="10px"> </div>
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
                            'title'=>'Berita Terkini',
                            'path'=>''
                        ))
                    </div>
                </div>
            </div>
        </section>
        @include('/components/presentational.newsList',[])
    </main>
@endsection