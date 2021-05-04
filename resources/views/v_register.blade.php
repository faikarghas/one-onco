
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'login'])
    <main>
        <section class="register__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box__register">
                            <h2 class="mb-5">Daftar</h2>


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

                                <p class="m-0"><i>Silakan Isi Data Diri Anda</i></p>
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" placeholder="Nama*" aria-label="nama" name="name" value="{{ old('name') }}">
                                </div>
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                <div class="input-group mb-4">
                                    <input type="email" class="form-control" placeholder="Email*" aria-label="email" name="email" value="{{ old('email') }}"> 
                                </div>
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                <div class="input-group mb-4">
                                    <input type="password" class="form-control" placeholder="Password*" aria-label="password" name="password" value="{{ old('password') }}"> 
                                </div>
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                <div class="input-group mb-4">
                                  <input type="number" class="form-control" placeholder="No. Whatsapp/hp*" aria-label="wa" name="phone" value="{{ old('phone') }}">                                  
                              </div>
                              <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                                <br>
                                <p class=""><i>Detail Alamat Anda Anda</i></p>
                                  <select id="select_provinsi" name="provinsi" class="form-select mb-4" aria-label="provinsi">
                                      <option selected>Pilih Provinsi*</option>
                                  </select>
                                <select id="select_kota" name="kota" class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Pilih Kota*</option>
                                </select>
                                <select name="kecamatan" class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Pilih Kecamatan*</option>
                                </select>
                                <textarea name="address" id=""  rows="3" placeholder="Alamat"></textarea>
                                <p><i>Personal OneOnco menyediakan informasi sesuai ketertarikan Anda!</i></p>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection