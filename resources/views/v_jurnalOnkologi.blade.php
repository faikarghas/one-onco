
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
                    @foreach($listingNews as $row)
                        <div class="col-12 col-md-4">
                            @include('components/presentational.boxNews',array(
                                'date'=> $row->createdAt,
                                'title'=>$row->title ,
                                'image_url'=>'https://source.unsplash.com/random',
                                'description'=>$row->shortContent,
                                'path'=>'artikel-kanker/'.$row->slug
                            ))  
                        </div>
                    @endforeach
                    {{-- <div class="col-12 text-center mt-5">
                        @include('components/presentational.boxShowMore',array(
                            'title'=>'Tampilkan lainnya',
                            'path'=>''
                        ))
                    </div> --}}
                </div>
            </div>
        </section>
    </main>
@endsection