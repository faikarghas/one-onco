
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner forDesktop">
            <img src="{{asset('/images/beritabanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Berita Terkini</h2>
                <p>Berita terkini seputar kanker</p>
            </div>
        </div>
        <section class="bg-color_lightGrey berita__section">
            <div class="container pt-5 pb-5 ">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        @include('components/presentational.boxNews',array(
                            'date'=>$listingNews[0]->createdAt,
                            'title'=>strip_tags($listingNews[0]->title),
                            'image_url'=>'https://source.unsplash.com/random',
                            'author'=>$listingNews[0]->shortContent,
                            'path'=>'berita-terkini/'.$listingNews[0]->slug,
                            'class'=>'bigBox'
                        ))
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <?php $index = 0; ?>
                            @foreach($listingNews as $row)
                            @if ($index != 0)
                            <div class="col-12 col-lg-6">
                                @include('components/presentational.boxNews',array(
                                    'date'=>$row->createdAt,
                                    'title'=>strip_tags($row->title),
                                    'image_url'=>'https://source.unsplash.com/random',
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