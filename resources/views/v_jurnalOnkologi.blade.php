
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner forDesktop">
            <img src="{{asset('/images/jurnalbanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
            </div>
        </div>
        <section class="bg-color_lightGrey berita__section">
            <div class="container pt-5 pb-5 ">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center mb-5"><strong>ARTIKEL KANKER</strong></h2>
                    </div>
                    <div class="col-12 col-lg-6">
                        @include('components/presentational.boxNews',array(
                            'date'=>$listingNews[0]->created_at,
                            'title'=>strip_tags($listingNews[0]->title),
                            'image_url'=>'https://oneonco-admin.herokuapp.com/'$listingNews[0]->imgDesktop,
                            'author'=>$listingNews[0]->shortContent,
                            'path'=>'/artikel-kanker/'.$listingNews[0]->slug,
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
                                    'date'=>$row->created_at,
                                    'title'=>strip_tags($row->title),
                                    'image_url'=>'https://oneonco-admin.herokuapp.com/'$listingNews[0]->imgDesktop,
                                    'author'=>$row->shortContent,
                                    'path'=>'/artikel-kanker/'.$row->slug,
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