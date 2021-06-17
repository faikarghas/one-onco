@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])
    <main>
        <section class="direktoriKanker__page">
            <div class="container">
                <div class="row">
                    <div class="col-12 forMobile">
                        <div class="row justify-content-center">
                            <div class="col-3 text-center"><img src="{{asset('/images/dirblack.png')}}" alt="dir-kanker" width="55px"></div>
                            <div class="col-6 d-flex flex-column align-items-start justify-content-center">
                                <h3>Direktori Kanker</h3>
                                <p class="m-0">Cari Dokter Onkologi terbaik, <br> labotarium & lainnya</p>
                            </div>
                        </div>
                        <hr class="mt-4 mb-4">
                    </div>
                    <div class="col-12 col-lg-4">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'directori_dokter2.svg',
                                'title'=>'Direktori Dokter',
                                'description'=>'Temukan dokter kanker disekitarmu',
                                'color'=>'#00A2E3;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori-dokter',
                                'bgColor'=> 'white'
                            ))
                    </div>
                    <div class="col-12 col-lg-4">
                        @include('components/presentational.boxRec',array(
                            'image_url'=>'directori_care_center.svg',
                            'title'=>'Direktori Rumah Sakit',
                            'description'=>'Temukan fasilitas perawatan kanker terdekat',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-care',
                            'bgColor'=> 'white'
                        ))
                    </div>
                    <div class="col-12 col-lg-4">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'directori_komunitas.svg',
                                'title'=>'Direktori Komunitas',
                                'description'=>'Temukan komunitas kanker disekitarmu',
                                'color'=>'#00A2E3;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori-lab',
                                'bgColor'=> 'white'
                            ))
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection