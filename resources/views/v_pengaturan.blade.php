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
                            <form method="post" action="{{ route('change.password') }}">
                                @csrf
                                @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{ $error }}</p>
                                @endforeach
                                <p class="m-0">Rubah Kata Sandi</p>
                                <div class="input-group mb-4">
                                    <input id="ipss4" type="password" class="form-control" placeholder="Kata sandi baru*" aria-label="sadi-baru" name="new_password">
                                    <span class="input-group-text showpas" id="showpassbaru1"><img class="img-fluid" src="{{asset('/images/showpassword.png')}}" width="20px" alt="" srcset=""></span>
                                </div>
                                <div class="input-group mb-4">
                                    <input id="ipss5" type="password" class="form-control" placeholder="Ulangi kata sandi baru*" aria-label="re-sandi-baru" name='new_confirm_password'>
                                    <span class="input-group-text showpas" id="showpassulang1"><img class="img-fluid" src="{{asset('/images/showpassword.png')}}" width="20px" alt="" srcset=""></span>
                                </div>
                                <br>
                                <p class=""><i>Personal OneOnco menyediakan informasi sesuai ketertarikan Anda!</i></p>
                                <select class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kanker</option>
                                    <option value="Kanker Kolorektal">Kanker Kolorektal</option>
                                    <option value="Kanker Serviks">Kanker Serviks</option>
                                    <option value="Kanker Payudara">Kanker Payudara</option>
                                    <option value="Kanker Paru-paru">Kanker Paru-paru</option>
                                </select>
                                <select class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Pilih Status Anda</option>
                                    <option value="Caregiver">Caregiver</option>
                                    <option value="Survivor">Survivor</option>
                                    <option value="Warrior">Warrior</option>
                                    <option value="Tenaga Kesehatan">Tenaga Kesehatan</option>
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