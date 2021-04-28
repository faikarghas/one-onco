
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <section class="detail__page1 forMobile">
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
            <img src="{{asset('/images/cerita_inspiratif.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>{!! $title_header !!}</h2>
                <p>{!! $tagline_header !!}</p>
            </div>
        </div>
        <div class="storyListWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    </div>
                    <div class="col-12 d-flex justify-content-between mb-5">
                        <div>
                            <h2 class="text-center text-lg-start mb-5"><strong>Cerita Inspiratif Pasien & Pendamping Kanker</strong></h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        @include('components/presentational.boxNews',array(
                            'date'=>$listingStory[0]->created_at,
                            'title'=>strip_tags($listingStory[0]->title),
                            'image_url'=>$listingStory[0]->imgDesktop,
                            'author'=>$listingStory[0]->shortContent,
                            'path'=>'/cerita-survivor/'.$listingStory[0]->slug,
                            'class'=>'bigBox'
                        ))
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <?php $index = 0; ?>
                            @foreach($listingStory as $row)
                            @if ($index != 0)
                            <div class="col-12 col-lg-6">
                                @include('components/presentational.boxNews',array(
                                    'date'=>$row->created_at,
                                    'title'=>strip_tags($row->title),
                                    'image_url'=>$row->imgDesktop,
                                    'author'=>$row->shortContent,
                                    'path'=>'/cerita-survivor/'.$row->slug,
                                    'class'=>'smallBox'
                                ))
                            </div>
                            @endif
                            <?php $index++ ?>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 mt-5 text-center">
                        @include('components/presentational.boxShowMore',array(
                            'title'=>'Load More',
                            'path'=>'{{ $pagesStory->links() }}'
                        ))
                    </div>
                </div>
            </div>
        </div>
        @include('/components/presentational.newsList',[])
    </main>
@endsection

