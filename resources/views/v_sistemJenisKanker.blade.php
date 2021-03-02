
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <section class="detail__page1">
            <div class="container">
                <div class="row">
                    <div class="col-12 fix-top">
                        <p class="text-center h5"><strong>SORTIR BERDASARKAN JENIS KANKER</strong></p>
                        <div class="cari_kanker">
                            <a href="/sistem-tubuh">
                                <ul>
                                    <li><i>{{$jenis}}</i></li>
                                    <li> <img src="{{asset('/images/arrow-white.png')}}" alt="arrow" width="10px"></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 55px">
                        <div class="detail__page1--img mb-5">
                            <img src="https://source.unsplash.com/random" alt="{{$jenis}}-img" height="180px" width="100%">
                        </div>
                        <div class="detail__page1--description mb-5">
                            <h1 class="mb-4">Jenis Sayuran dan Kandungan</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sapiente sunt fugiat quis molestias, expedita asperiores, eaque laudantium necessitatibus incidunt recusandae perferendis libero non? Nobis dolorum aperiam est esse tenetur a qui ab quos odit totam rerum, quis perspiciatis porro nihil tempora sequi ex repellendus et quisquam. Quia quidem eum qui, blanditiis aperiam, nobis maxime maiores ratione quis corrupti ipsam consequuntur iure quisquam possimus at voluptatem alias? Qui veniam magnam suscipit officiis et quod officia necessitatibus atque corrupti odio accusantium optio laudantium possimus, dicta consequuntur blanditiis quos ipsam vero nam veritatis eum! Architecto id reprehenderit sit facere eaque placeat iure in similique vero, totam ipsum repellat pariatur dolorum natus itaque tenetur laboriosam iste hic corporis, deleniti qui? Voluptatibus voluptates commodi praesentium molestiae pariatur eius, dolores fugiat! Asperiores est alias tempore sunt aperiam reprehenderit provident quo a. Nostrum commodi vero labore ad molestias consectetur minus. Repellendus illum tenetur excepturi facere voluptatem fugiat praesentium sapiente, corporis enim, minima ipsa consequuntur ad repellat esse? Magnam accusamus exercitationem repellat laudantium ut sint numquam reiciendis neque quo harum excepturi tempore hic commodi minima molestias, alias voluptatibus ipsa </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('/components/presentational.newsList',[])
    </main>
@endsection