@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'login'])

    <main>
        <section class="setting__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box__setting">
                            <h2 class="mb-5"> <img width="20px" src="{{asset('/images/settingBlack.png')}}" alt=""> Pengaturan Akun</h2>
                            <form >
                                <p class="m-0">Rubah Kata Sandi</p>
                                <div class="input-group mb-4">
                                    <input type="password" class="form-control" placeholder="Kata sandi baru*" aria-label="sadi-baru" >
                                </div>
                                <div class="input-group mb-4">
                                    <input type="password" class="form-control" placeholder="Ulangi kata sandi baru*" aria-label="re-sandi-baru" >
                                </div>
                                <br>
                                <p class=""><i>Personal OneOnco menyediakan informasi sesuai ketertarikan Anda!</i></p>
                                <select class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Kanker Payudara</option>
                                    <option value="1">One</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Pilih Profesi Anda</option>
                                    <option value="1">One</option>
                                    <option value="3">Three</option>
                                </select>
                                @include('/components/presentational.boxAuthButton',['title'=>'Masuk','color'=>'#32A48E'])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection