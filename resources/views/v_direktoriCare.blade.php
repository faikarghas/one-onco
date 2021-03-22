@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])
    <main>
        <section class="direktoriDet__header forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-center"><strong>Cari Care Center di daerahmu:</strong></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="">
                            <select class="form-select mb-2" aria-label="Default select example">
                                <option selected>Pilih Kota</option>
                                <option value="1">One</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>Pilih Rumah Sakit</option>
                                <option value="1">One</option>
                                <option value="3">Three</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="direktori__menuTab forDesktop">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="box__rec">
                            <?php
                                $currentUrl = $_SERVER['REQUEST_URI'];
                                $bgColor = $currentUrl == '/direktori-care' ? '#32A48E;' : 'white';
                                $color = $currentUrl == '/direktori-care' ? 'white' : '#32A48E;';
                            ?>
                            @include('components/presentational.boxRec',[
                                'image_url'=>'dir-dokter.png',
                                'title'=>'Direktori Dokter',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#32A48E;',
                                'colorPar'=>'#808080;',
                                'path'=>'direktori-dokter',
                                'bgColor'=> 'white'
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
                                'color'=>$color,
                                'colorPar'=>$color,
                                'path'=>'direktori-care',
                                'bgColor'=>$bgColor
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="direktori__list">
            <div class="container mb-5 forDesktop">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-start"> <strong>Cari dokter Onkologi di daerahmu:</strong></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col">
                                    <select class="form-select mb-2" aria-label="Default select example" id="selectProvinces3" name="provinces3">
                                        <option selected>Pilih Kota</option>
                                        @foreach ($provinces as $province => $value)
                                            <option value="{{ $province }}"> {{ $value }}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select mb-3" aria-label="Default select example" id="selectCities3" name="cities3">
                                        <option value="">Pilih Kabupaten</option>
                                    </select>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row listFaskes">
                </div>
            </div>
        </section>
        <section class="bg-color_lightGrey pt-3 pb-4 forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('components/presentational.boxRec',array(
                            'image_url'=>'dir-dokter.png',
                            'title'=>'Direktori Dokter',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#32A48E;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-dokter',
                            'bgColor'=> 'white'
                        ))
                        @include('components/presentational.boxRec',array(
                            'image_url'=>'dir-lab.png',
                            'title'=>'Direktori Lab',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#32A48E;',
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





