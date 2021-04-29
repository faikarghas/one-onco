
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner forDesktop">
            <img src="{{asset('/images/cerita_inspiratif.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>{!! $title_header !!}</h2>
                <p>{!! $tagline_header !!}</p>
            </div>
        </div>
        <section class="detail__page1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="detail__page1--img mb-5">
                            <img src="{{asset('data_artikel')}}/{{$imageStory}}" alt="img" height="180px" width="100%">
                        </div>
                        <div class="detail__page1--description mb-5">
                            <h1 class="mb-4">{{ $titleStory }}</h1>
                            <h4>{{ $authorStory }}</h4>
                            <p class="pagi-init">{!! $contentStory !!}</p>
                            <a href="/perawatan-kanker" class="text-green forMobile"><strong><i>List Referensi</i></strong></a>
                        </div>
                        <div class="share_sosmed forDesktop-dflex">
                            <div class="share_sosmed-link">
                                <p>Apabila informasi ini berguna untuk Anda, <br>bagikan ke keluarga, kerabat, dan teman Anda.</p>
                                <a href="https://facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank" rel="noopener"">
                                    <img src="{{asset('/images/fb2-logo.png')}}" alt="fb-logo" width="30px">
                                </a>
                                <a href="https://twitter.com/intent/tweet/?text={{$titleStory}}&url={{url()->full()}}" target="_blank" rel="noopener" aria-label="">
                                    <img src="{{asset('/images/twitter2-logo.png')}}" alt="twitter-logo" width="30px">
                                </a>
                                <a href="https://wa.me/?text={{url()->full()}}" target="_blank" rel="noopener">
                                    <img src="{{asset('/images/wa-logo.png')}}" alt="fb-logo" width="30px">
                                </a>
                            </div>
                            <div class="share_sosmed-act">
                                <ul>
                                    <li>
                                        <a href="/belanja-sehat"><img src="{{asset('/images/belanja_sehat_icon.png')}}" alt="logo belanja sehat"></a>
                                        <a href="/konsultasi-online"><img src="{{asset('/images/konsultasi_online_icon.png')}}" alt="logo belanja sehat"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 forDesktop">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="text-center text-lg-start mb-5"><strong>Cerita lainnya</strong></h2>
                                </div>

                                @foreach($otherStory as $row)
                                <div class="col-12">
                                        <div class="boxNewsWimg mt-4">
                                            <a href="{{$row->slug}}">
                                            <div class="boxInformation">
                                                <div class="title">
                                                    <span>{{ $row->created_at }}</span>
                                                    <h3 class="mt-2 mb-4">{{ $row->title }}</h3>
                                                    <?php 
                                                    $yearCurrent  = date('Y');
                                                    $dateNews =  date('Y', strtotime($row->publishDate));
                                                    if ($yearCurrent == $dateNews ){
                                                        $date =  date('d M', strtotime($dateNews)).' 2021';
                                                    } else {
                                                        $date =  date('Y-d-mm', strtotime($dateNews));
                                                    }
                                                ?>
                                                    <p>{{ $date }}</p>
                                                </div>
                                                {{-- @include('components/presentational.boxReadMore',array('title'=>'Baca Selengkapnya','path'=>'')) --}}
                                            </div>
                                            </a>
                                        </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 mt-5 mb-5 forMobile">
                        <div class="share_sosmed">
                            <p>Apabila informasi ini berguna untuk Anda, <br>bagikan ke keluarga, kerabat, dan teman Anda.</p>
                            <div class="share_sosmed-link">
                                <a href="https://facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank" rel="noopener"">
                                    <img src="{{asset('/images/fb2-logo.png')}}" alt="fb-logo" width="30px">
                                </a>
                                <a href="https://twitter.com/intent/tweet/?text={{$titleStory}}&url={{url()->full()}}" target="_blank" rel="noopener" aria-label="">
                                    <img src="{{asset('/images/twitter2-logo.png')}}" alt="twitter-logo" width="30px">
                                </a>
                                <a href="https://wa.me/?text={{url()->full()}}" target="_blank" rel="noopener">
                                    <img src="{{asset('/images/wa-logo.png')}}" alt="fb-logo" width="30px">
                                </a>
                            </div>
                            <div class="share_sosmed-act">
                                <ul>
                                    <li>
                                        <a href="/belanja-sehat"><img src="{{asset('/images/belanja_sehat_icon.png')}}" alt="logo belanja sehat"></a>
                                        <a href="/konsultasi-online"><img src="{{asset('/images/konsultasi_online_icon.png')}}" alt="logo belanja sehat"></a>
                                    </li>
                                </ul>
                            </div>
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