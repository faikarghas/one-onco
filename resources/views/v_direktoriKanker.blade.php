@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'/'])
    <main>
        <section class="direktoriKanker__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-3 text-center"><img src="{{asset('/images/dirblack.png')}}" alt="dir-kanker" width="55px"></div>
                            <div class="col-6 d-flex flex-column align-items-start justify-content-center">
                                <h3>Direktori Kanker</h3>
                                <p class="m-0">Cari Dokter Onkologi terbaik, <br> labotarium & lainnya</p>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                    </div>
                    <div class="col-12">
                        <div class="box__rec">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'dir-dokter.png',
                                'title'=>'Direktori Dokter',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#32A48E;',
                                'path'=>'direktori-dokter'
                            ))
                        </div>
                        <div class="box__rec">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'dir-lab.png',
                                'title'=>'Direktori Lab',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#32A48E;',
                                'path'=>'perawatan-kanker'
                            ))
                        </div>
                        <div class="box__rec">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'dir-care.png',
                                'title'=>'Direktori Care Center',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#32A48E;',
                                'path'=>'direktori-care'
                            ))
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection