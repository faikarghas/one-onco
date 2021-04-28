
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner forDesktop">

            @switch(Request::segment(1))
            @case('berita-terkini')
                <img src="{{asset('/images/berita_terkini.jpg')}}" width="100%" height="100%" alt="">
                @break
            @case('artikel-kanker')
                <img src="{{asset('/images/artikel_kanker.jpg')}}" width="100%" height="100%" alt="">
                @break
            @case('cerita-survivor')
                <img src="{{asset('/images/perPendamping.jpg')}}" width="100%" height="100%" alt="">
                @break
            @default
                <img src="{{asset('/images/solusiOnkologiBanner.jpg')}}" width="100%" height="100%" alt="">
            @endswitch
            <div class="box__banner-desc">
                <h2>{!! $titleHeader !!}</h2>
                <p>{!! $taglineHeader !!}</p>
            </div>
        </div>
        <section class="bg-color_lightGrey berita__section">
            <div class="container pt-5 pb-5 ">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <?php
                                $yearCurrent  = date('Y');
                                $dateNews =  date('Y', strtotime($listingNews[0]->publishDate));
                                if ($yearCurrent == $dateNews ){
                                    $date =  date('d-M', strtotime($listingNews[0]->publishDate)).'-2021';
                                } else {
                                    $date =  date('d-M-Y', strtotime($listingNews[0]->publishDate));
                                }
                            ?>
                        @include('components/presentational.boxNews',array(
                            'date'=>$date,
                            'title'=>strip_tags($listingNews[0]->title),
                            'image_url'=>$listingNews[0]->imgDesktop,
                            'description'=>$listingNews[0]->shortContent,
                            'path'=>Request::segment(1).'/'.$listingNews[0]->slug,
                            'class'=>'bigBox'
                        ))
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <?php $index = 0; ?>
                            @foreach($listingNews as $row)
                            @if ($index != 0)

                            <?php
                                $url;
                                switch (Request::segment(1)) {
                                    case 'berita-terkini':
                                        $url='berita-terkini/'.$row->slug;
                                        break;
                                    case 'artikel-kanker':
                                        $url='artikel-kanker/'.$row->slug;
                                        break;
                                    case 'cerita-survivor':
                                        $url='cerita-survivor/'.$row->slug;
                                        break;
                                    default:
                                        break;
                                };
                                $yearCurrent  = date('Y');
                                $dateNews =  date('Y', strtotime($row->publishDate));
                                if ($yearCurrent == $dateNews ){
                                    $date =  date('d-M', strtotime($row->publishDate)).'-2021';
                                } else {
                                    $date =  date('d-M-Y', strtotime($row->publishDate));
                                }
                            ?>
                            <div class="col-12 col-lg-6">
                                @include('components/presentational.boxNews',array(
                                    'date'=>$date,
                                    'title'=>strip_tags($row->title),
                                    'image_url'=>$row->imgDesktop,
                                    'description'=>$row->shortContent,
                                    'path'=> $url,
                                    'class'=>'smallBox'
                                ))
                            </div>
                            @endif
                            <?php $index++ ?>
                            @endforeach
                        </div>
                    </div>

                    {{-- <div class="col-12 mt-5">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                @include('components/presentational.boxNews',array(
                                    'date'=>$listingNews[0]->created_at,
                                    'title'=>strip_tags($listingNews[0]->title),
                                    'image_url'=>'https://source.unsplash.com/random',
                                    'author'=>$listingNews[0]->shortContent,
                                    'path'=>Request::segment(1).'/'.$listingNews[0]->slug,
                                    'class'=>'smallBox'
                                ))
                            </div>
                            <div class="col-12 col-lg-3">
                                @include('components/presentational.boxNews',array(
                                    'date'=>$listingNews[0]->created_at,
                                    'title'=>strip_tags($listingNews[0]->title),
                                    'image_url'=>'https://source.unsplash.com/random',
                                    'author'=>$listingNews[0]->shortContent,
                                    'path'=>Request::segment(1).'/'.$listingNews[0]->slug,
                                    'class'=>'smallBox'
                                ))
                            </div>
                            <div class="col-12 col-lg-3">
                                @include('components/presentational.boxNews',array(
                                    'date'=>$listingNews[0]->created_at,
                                    'title'=>strip_tags($listingNews[0]->title),
                                    'image_url'=>'https://source.unsplash.com/random',
                                    'author'=>$listingNews[0]->shortContent,
                                    'path'=>Request::segment(1).'/'.$listingNews[0]->slug,
                                    'class'=>'smallBox'
                                ))
                            </div>
                            <div class="col-12 col-lg-3">
                                @include('components/presentational.boxNews',array(
                                    'date'=>$listingNews[0]->created_at,
                                    'title'=>strip_tags($listingNews[0]->title),
                                    'image_url'=>'https://source.unsplash.com/random',
                                    'author'=>$listingNews[0]->shortContent,
                                    'path'=>Request::segment(1).'/'.$listingNews[0]->slug,
                                    'class'=>'smallBox'
                                ))
                            </div>
                        </div>
                    </div> --}}

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