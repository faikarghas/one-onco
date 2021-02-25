@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])
    <main>
        <section class="direktori__menuTab forDesktop" style="background-color: white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="box__rec">
                            <?php
                                $currentUrl = $_SERVER['REQUEST_URI'];
                                $bgColor = $currentUrl == '/direktori-dokter' ? '#32A48E;' : 'white';
                                $color = $currentUrl == '/direktori-dokter' ? 'white' : '#32A48E;';
                            ?>
                            @include('components/presentational.boxRec',[
                                'image_url'=>'dir-dokter.png',
                                'title'=>'Direktori Dokter',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>$color,
                                'colorPar'=>$color,
                                'path'=>'direktori-dokter',
                                'bgColor'=> $bgColor
                            ])
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="box__rec">
                            @include('components/presentational.boxRec',[
                                'image_url'=>'dir-lab.png',
                                'title'=>'Direktori Lab',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#32A48E;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori-lab',
                                'bgColor'=>'white'
                            ])
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="box__rec">
                                @include('components/presentational.boxRec',[
                                'image_url'=>'dir-care.png',
                                'title'=>'Direktori Care Center',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#32A48E;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori-care',
                                'bgColor'=>'white'
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="direktori__list-detail">
            <div class="container mb-5 forDesktop">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-start"> <strong>Cari dokter Onkologi di daerahmu:</strong></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="">
                            <div class="row">
                                <div class="col">
                                    <select class="form-select mb-2" aria-label="Default select example">
                                        <option selected>Pilih Kota</option>
                                        <option value="1">One</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>Pilih Rumah Sakit</option>
                                        <option value="1">One</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="box__rec3">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-center">
                                        <div class="rounded_img">
                                            <img width="100%" height="100%" src="{{asset("/images/dir-dokter.png")}}" alt="dokter" />
                                        </div>
                                    </div>
                                    <div class="col-9 d-flex flex-column align-items-start">
                                        <div class="title_wrapper">
                                            <h3><strong>dr. Faikar Ghassan</strong></h3>
                                        </div>
                                        <ul>
                                            <li><p><strong>Unit Operasional Onkologi</strong></p></li>
                                            <li><p>Kemoterapi</p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="jadwal_list">
                            <h4><strong>Jadwal Praktik</strong></h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="box__rec3">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-center">
                                        <div class="rounded_img">
                                            <img width="100%" height="100%" src="{{asset("/images/dir-dokter.png")}}" alt="dokter" />
                                        </div>
                                    </div>
                                    <div class="col-9 d-flex flex-column align-items-start">
                                        <h3 style="color: #00A2E3;"><strong>RSU Kabupaten Tangerang</strong></h3>
                                        <p><strong>Unit Operasional Onkologi</strong></p>
                                        <p>Kemoterapi</p>
                                        <p><strong>Jadwal Praktik</strong></p>
                                        <p>Senin, Selasa, Kamis : 09.00 - 13.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="box__rec3">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-center">
                                        <div class="rounded_img">
                                            <img width="100%" height="100%" src="{{asset("/images/dir-dokter.png")}}" alt="dokter" />
                                        </div>
                                    </div>
                                    <div class="col-9 d-flex flex-column align-items-start">
                                        <h3 style="color: #00A2E3;"><strong>RSU Kabupaten Tangerang</strong></h3>
                                        <p><strong>Unit Operasional Onkologi</strong></p>
                                        <p>Kemoterapi</p>
                                        <p><strong>Jadwal Praktik</strong></p>
                                        <p>Senin, Selasa, Kamis : 09.00 - 13.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="box__rec3">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center justify-content-center">
                                        <div class="rounded_img">
                                            <img width="100%" height="100%" src="{{asset("/images/dir-dokter.png")}}" alt="dokter" />
                                        </div>
                                    </div>
                                    <div class="col-9 d-flex flex-column align-items-start">
                                        <h3 style="color: #00A2E3;"><strong>RSU Kabupaten Tangerang</strong></h3>
                                        <p><strong>Unit Operasional Onkologi</strong></p>
                                        <p>Kemoterapi</p>
                                        <p><strong>Jadwal Praktik</strong></p>
                                        <p>Senin, Selasa, Kamis : 09.00 - 13.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-color_lightGrey pt-3 forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('components/presentational.boxRec',[
                            'image_url'=>'dir-lab.png',
                            'title'=>'Direktori Lab',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#32A48E;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-lab',
                            'bgColor'=> 'white'
                        ])
                        @include('components/presentational.boxRec',[
                            'image_url'=>'dir-care.png',
                            'title'=>'Direktori Care Center',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#32A48E;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-care',
                            'bgColor'=> 'white'
                        ])
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection