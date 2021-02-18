@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'/'])
    <main>
        <section class="direktoriDet__header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-center"> <strong>Cari dokter Onkologi di daerahmu:</strong></h3>
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
        <section class="direktoriDet__list">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="box__rec2">
                                @include('components/presentational.boxRec2',array(
                                    'image_url'=>'dir-dokter.png',
                                    'title'=>'dr. Rajesh Kahwani, Sp PD-KHOM, FINASIM',
                                    'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                    'color'=>'#4172CB;',
                                    'path'=>'direktori-dokter',
                                    'rounded'=>'rounded_img'
                                ))
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-color_lightGrey pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box__rec">
                            @include('components/presentational.boxRec',array(
                                'image_url'=>'dir-lab.png',
                                'title'=>'Direktori Lab',
                                'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                                'color'=>'#32A48E;',
                                'path'=>'direktori-lab'
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