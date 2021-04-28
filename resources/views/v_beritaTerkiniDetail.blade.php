
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <section class="detail__page1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="detail__page1--img mb-5">
                            <img src="https://source.unsplash.com/random" alt="{{$slugStory}}-img" height="180px" width="100%">
                        </div>
                        <div class="detail__page1--description mb-5">

                            <h1 class="mb-4">{{ $titleStory }}</h1>
                            <p class="pagi-init">{!! $dateStory !!}</p>
                            <p class="pagi-init">{!! $contentStory !!}</p>
                        </div>
                        <div class="share_sosmed forDesktop-dflex">
                            <div class="share_sosmed-link">
                                <p>Apabila informasi ini berguna untuk Anda, <br>bagikan ke keluarga, kerabat, dan teman Anda.</p>
                                <a href="https://facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank" rel="noopener"">
                                    <img src="{{asset('/images/fb2-logo.png')}}" alt="fb-logo" width="30px">
                                </a>
                                <a href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url={{url()->full()}}" target="_blank" rel="noopener" aria-label="">
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
                                    @if (Request::segment(1)=='berita-terkini')
                                    <h2 class="text-center text-lg-start mb-5"><strong>Berita lainnya</strong></h2>
                                    @else
                                    <h2 class="text-center text-lg-start mb-5"><strong>Artikel lainnya</strong></h2>
                                    @endif
                                  </div>
                                @foreach ( $otherStory as $row )
                                <div class="col-12">
                                    <div class="boxNewsWimg mt-4">
                                        <a href="{{$row->slug}}">
                                        <div class="boxInformation">
                                            <div class="title">
                                                <span>{{ $row->created_at }}</span>
                                                <h3 class="mt-2 mb-4">{{ $row->shortContent }}</h3>
                                                <?php 
                                                  $yearCurrent  = date('Y');
                                                  $dateNews =  date('Y', strtotime($row->publishDate));
                                                  if ($yearCurrent == $dateNews ){
                                                      $date =  date('d M', strtotime($dateNews));
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
                    <div class="col-12 forMobile">
                        <div class="pagination__wrapper">
                            <span>Halaman</span>
                            <div class="pagination__wrapper-button">
                                <div class="page_number">
                                    {{-- <div class="page_numberButton active">1</div> --}}
                                    {{-- <div class="page_numberButton">2</div> --}}
                                </div>
                                <div class="show_all"><p>Show all</p> <img src="{{asset('/images/arrow-white.png')}}" alt="arrow" width="10px"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5 mb-5 forMobile">
                        <div class="share_sosmed">
                            <p>Apabila informasi ini berguna untuk Anda, <br>bagikan ke keluarga, kerabat, dan teman Anda.</p>
                            <div class="share_sosmed-link">
                                <a href="https://facebook.com/sharer/sharer.php?u={{url()->full()}}" target="_blank" rel="noopener"">
                                    <img src="{{asset('/images/fb2-logo.png')}}" alt="fb-logo" width="30px">
                                </a>
                                <a href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url={{url()->full()}}" target="_blank" rel="noopener" aria-label="">
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