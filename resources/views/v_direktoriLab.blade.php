@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'/'])
    <main>
        <section class="direktoriLab__list pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="direktoriLab__list-item mb-4">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h4><strong>KALGen INNOLAB</strong></h4>
                                </div>
                                <div class="col-5">
                                    <img src="{{asset('/images/kalgen.png')}}" width="100px" alt="kalgen">
                                </div>
                                <div class="col-7">
                                    <ul>
                                        <li>
                                            <img src="{{asset('/images/addr-icon.png')}}" width="15px" alt="">
                                            <p>Jl. Yos Sudarso Kav 85, RT.10/RW.11, Sunter Jaya, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14360</p>
                                        </li>
                                        <li>
                                            <img src="{{asset('/images/phone-icon.png')}}" width="15px" alt="">
                                            <p>(021) 21882388</p>
                                        </li>
                                        <li>
                                            <img src="{{asset('/images/web-icon.png')}}" width="15px" alt="">
                                            <p>www.kalgeninnolab.co.id</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-color_lightGrey pt-4">
            <div class="container">
                <div class="row">
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