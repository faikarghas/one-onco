
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
                            <h1 class="mb-4">Jenis Sayuran dan Kandungan</h1>
                            <p class="pagi-init">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sapiente sunt fugiat quis molestias, expedita asperiores, eaque laudantium necessitatibus incidunt recusandae perferendis libero non? Nobis dolorum aperiam est esse tenetur a qui ab quos odit totam rerum, quis perspiciatis porro nihil tempora sequi ex repellendus et quisquam. Quia quidem eum qui, blanditiis aperiam, nobis maxime maiores ratione quis corrupti ipsam consequuntur iure quisquam possimus at voluptatem alias? Qui veniam magnam suscipit officiis et quod officia necessitatibus atque corrupti odio accusantium optio laudantium possimus, dicta consequuntur blanditiis quos ipsam vero nam veritatis eum! Architecto id reprehenderit sit facere eaque placeat iure in similique vero, totam ipsum repellat pariatur dolorum natus itaque tenetur laboriosam iste hic corporis, deleniti qui? Voluptatibus voluptates commodi praesentium molestiae pariatur eius, dolores fugiat! Asperiores est alias tempore sunt aperiam reprehenderit provident quo a. Nostrum commodi vero labore ad molestias consectetur minus. Repellendus illum tenetur excepturi facere voluptatem fugiat praesentium sapiente, corporis enim, minima ipsa consequuntur ad repellat esse? Magnam accusamus exercitationem repellat laudantium ut sint numquam reiciendis neque quo harum excepturi tempore hic commodi minima molestias, alias voluptatibus ipsa</p>
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
                                    <h2 class="text-center text-lg-start mb-5"><strong>Artikel lainnya</strong></h2>
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