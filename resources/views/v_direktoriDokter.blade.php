@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'/'])
    <main>
        <section class="direktoriDet__header forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-center"> <strong>Cari dokter Onkologi di daerahmu:</strong></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="">
                            <select class="form-select mb-2" aria-label="Default select example" id="selectCitiesm" name="citiesm">
                                <option selected>Pilih Kota</option>
                                @foreach ($cities as $citie => $value)
                                    <option value="{{ $citie }}"> {{ $value }}</option>   
                                @endforeach
                            </select>
                            <select class="form-select mb-3" aria-label="Default select example" id="selectFaskesm" name="faskesm">
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
                    <div class="col-12 col-lg-4">
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
                    <div class="col-12 col-lg-4">
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
                                    <select class="form-select mb-2" aria-label="Default select example" id="selectCities" name="cities">
                                        <option selected>Pilih Kota</option>
                                        @foreach ($cities as $citie => $value)
                                            <option value="{{ $citie }}"> {{ $value }}</option>   
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select mb-3" aria-label="Default select example" id="selectFaskes" name="faskes">
                                        <option selected>Pilih Rumah Sakit</option>
                                       
                                    </select>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @for ($i = 0; $i < 3; $i++)
                    <div class="col-12 col-lg-6">
                        <div class="box__rec2">
                            @include('components/presentational.boxRec2',array(
                                'image_url'=>'dir-dokter.png',
                                'title'=>'dr. Rajesh Kahwani, Sp PD-KHOM, FINASIM',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#4172CB;',
                                'path'=>'direktori-dokter/faikar',
                                'rounded'=>'rounded_img'
                            ))
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section>
        <section class="bg-color_lightGrey pt-3 pb-4 forMobile">
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