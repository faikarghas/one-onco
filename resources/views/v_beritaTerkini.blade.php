
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner forDesktop">

            {{-- @switch(Request::segment(1))
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
            @endswitch --}}

            <img src="{{asset('/images/'.$img_header)}}" alt="" width="100%" height="100%" alt="">
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
                            $date =  date('d-M-Y', strtotime($listingNews[0]->publishDate));
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
                    <div class="col-12 col-lg-6 ">
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
                                $date =  date('d-M-Y', strtotime($row->publishDate));
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

                    <div class="col-12 mt-5">
                        <div class="row" id="post_data">
                            {{ csrf_field() }}
                            </div>
                        </div>
                    </div>

                    <div id="load_more"  class="col-12 d-flex align-items-center justify-content-center mt-5">
                        <button type="button" name="load_more_button" class="boxShowMore d-flex align-items-center justify-content-center"  id="loadMoreNews">Berita lainnya</button>
                    </div>

                    <?php
                        switch (Request::segment(1)) {
                            case('berita-terkini'):
                                $pathButton ='Berita lainnya';
                                break;
                            case('artikel-kanker'):
                                $pathButton ='Artikel lainnnya';
                                break;
                            case('cerita-survivor'):
                                $pathButton ='Cerita inspiratif lainnya';
                                break;
                            default:
                                break;
                        };

                    ?>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
