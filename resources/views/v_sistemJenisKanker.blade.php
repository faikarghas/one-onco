
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
                            <h1 class="mb-4">{{ $titleKanker }}</h1>
                            {{ $contentKanker   }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('/components/presentational.newsList',[])
    </main>
@endsection