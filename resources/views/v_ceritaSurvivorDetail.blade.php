
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
                            <img src="https://source.unsplash.com/random" alt="img" height="180px" width="100%">
                        </div>
                        <div class="detail__page1--description mb-5">
                            <h1 class="mb-4">{{ $titleStory }}</h1>
                            <h4>{{ $authorStory }}</h4>
                            <p class="pagi-init">{{ $contentStory }}</p>
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

                                @foreach($otherStory as $row)
                                <div class="col-12 mt-4">
                                    @include('components/presentational.boxNews',array(
                                      'date'=>$row->created_at,
                                      'title'=>strip_tags($row->title),
                                      'image_url'=>'https://source.unsplash.com/random',
                                      'description'=>'',
                                      'author'=>$row->shortContent,
                                      'path'=>'/cerita-survivor/'.$row->slug
                                    ))
                                </div>
                                @endforeach


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