
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'login'])
    <main>
        <section class="register__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box__register">
                            <h2 class="mb-5">Pendaftaran Akun</h2>


                            <form id="register_form" method="post" action="{{ route('register') }}">
                              @if(Session::get('success'))
                                <div class="alert alert-success">
                                  {{ Session::get('success') }}
                                </div>
                              @endif
                              @if(Session::get('error'))
                                <div class="alert alert-danger">
                                  {{ Session::get('error') }}
                                </div>
                              @endif

                              @csrf

                                <p class="m-0"><strong>Data Diri</strong></p>
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap*" aria-label="nama" name="name" value="{{ old('name') }}">
                                </div>
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                <div class="input-group mb-4">
                                    <input type="email" class="form-control" placeholder="Email*" aria-label="email" name="email" value="{{ old('email') }}">
                                </div>
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                <div class="input-group mb-4">
                                    <input type="password" class="form-control" placeholder="Kata Sandi*" aria-label="password" name="password" value="{{ old('password') }}">
                                </div>
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                <div class="input-group mb-4">
                                  <input type="text" class="form-control" placeholder="Nomor ponsel*" aria-label="wa" name="phone" value="{{ old('phone') }}">
                              </div>
                              <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                              <p><i>*Harus diisi</i></p>
                              <br>
                                <p><i>Kami ingin mengenal Anda! Ceritakan kesukaan Anda agar kami dapat memberikan informasi yang menarik untuk Anda</i></p>
                                <select class="form-select mb-4" aria-label="Default select example" name="jenis_kanker">
                                    <option selected>Pilih Jenis Kanker</option>
                                    <option value="Kanker Kolorektal">Kanker Kolorektal</option>
                                    <option value="Kanker Serviks">Kanker Serviks</option>
                                    <option value="Kanker Payudara">Kanker Payudara</option>
                                    <option value="Kanker Paru-paru">Kanker Paru-paru</option>
                                </select>
                                <select class="form-select mb-4" aria-label="Default select example" name="status">
                                    <option selected>Pilih Status Anda</option>
                                    <option value="Caregiver">Caregiver</option>
                                    <option value="Survivor">Survivor</option>
                                    <option value="Warrior">Warrior</option>
                                    <option value="Tenaga Kesehatan">Tenaga Kesehatan</option>
                                </select>
                                @include('/components/presentational.boxAuthButton',['title'=>'Daftar','color'=>'#32A48E'])
                                <br>
                                <p class="text-center mb-2">Sudah memiliki akun? <a href="{{route('login')}}">Masuk disini</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection