
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <section class="detail__page1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="detail__page1--img mb-5">
                            <img src="https://source.unsplash.com/random" alt="{{$slug}}-img" height="180px" width="100%">
                        </div>
                        <div class="detail__page1--description mb-5">
                            <h1 class="mb-4">Jenis Sayuran dan Kandungan</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sapiente sunt fugiat quis molestias, expedita asperiores, eaque laudantium necessitatibus incidunt recusandae perferendis libero non? Nobis dolorum aperiam est esse tenetur a qui ab quos odit totam rerum, quis perspiciatis porro nihil tempora sequi ex repellendus et quisquam. Quia quidem eum qui, blanditiis aperiam, nobis maxime maiores ratione quis corrupti ipsam consequuntur iure quisquam possimus at voluptatem alias? Qui veniam magnam suscipit officiis et quod officia necessitatibus atque corrupti odio accusantium optio laudantium possimus, dicta consequuntur blanditiis quos ipsam vero nam veritatis eum! Architecto id reprehenderit sit facere eaque placeat iure in similique vero, totam ipsum repellat pariatur dolorum natus itaque tenetur laboriosam iste hic corporis, deleniti qui? Voluptatibus voluptates commodi praesentium molestiae pariatur eius, dolores fugiat! Asperiores est alias tempore sunt aperiam reprehenderit provident quo a. Nostrum commodi vero labore ad molestias consectetur minus. Repellendus illum tenetur excepturi facere voluptatem fugiat praesentium sapiente, corporis enim, minima ipsa consequuntur ad repellat esse? Magnam accusamus exercitationem repellat laudantium ut sint numquam reiciendis neque quo harum excepturi tempore hic commodi minima molestias, alias voluptatibus ipsa </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box__rec2 bdrec">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-center">
                                        <div class="rounded_img">
                                            <img width="100%" height="100%" src="{{asset("/images/dir-dokter.png")}}" alt="dir-dokter" />
                                        </div>
                                    </div>
                                    <div class="col-9 d-flex flex-column align-items-start justify-content-center">
                                        <h3 style="color:#4172CB;"><strong>dr. Rajesh Kahwani, Sp PD-KHOM, FINASIM</strong></h3>
                                        <ul>
                                            <li><img src="{{asset('/images/stetoskop.png')}}" width="12px" alt="stetoskop"></li>
                                            <li><p>Dokter Onkologi</p></li>
                                        </ul>
                                        <ul>
                                            <li><img src="{{asset('/images/stetoskop.png')}}" width="12px" alt="stetoskop"></li>
                                            <li><p>RSU Bunda Jakarta (Menteng, Jakarta)</p></li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 mt-5 mb-5">
                        <div class="share_sosmed">
                            <p>Apabila informasi ini berguna untuk Anda, <br>bagikan ke keluarga, kerabat, dan teman Anda.</p>
                            <img src="{{asset('/images/fb2-logo.png')}}" alt="fb-logo" width="30px">
                            <img src="{{asset('/images/twitter2-logo.png')}}" alt="twitter-logo" width="30px">
                            <img src="{{asset('/images/wa-logo.png')}}" alt="fb-logo" width="30px">
                        </div>
                    </div>
                    <div class="col-12">
                        @include('/components/presentational.listContent',[])
                    </div>
                </div>
            </div>
        </section>
        @include('/components/presentational.newsList',[])
    </main>
@endsection