
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
                            <form id="register_form">
                                <p class="m-0"><i>Silakan Isi Data Diri Anda</i></p>
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" placeholder="Nama*" aria-label="nama" >
                                </div>
                                <div class="input-group mb-4">
                                    <input type="email" class="form-control" placeholder="Email*" aria-label="email">
                                </div>
                                <div class="input-group mb-4">
                                    <input type="number" class="form-control" placeholder="No. Whatsapp/hp*" aria-label="wa">
                                </div>
                                <br>
                                <p class=""><i>Detail Alamat Anda Anda</i></p>
                                <select id="select_provinsi" name="provinsi" class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Pilih Provinsi*</option>
                                </select>
                                <select name="kota" class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Pilih Kota*</option>
                                </select>
                                <select class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Pilih Kecamatan*</option>
                                    <option value="1">One</option>
                                    <option value="3">Three</option>
                                </select>
                                <textarea name="" id=""  rows="3" placeholder="Alamat"></textarea>
                                <p><i>Personal OneOnco menyediakan informasi sesuai ketertarikan Anda!</i></p>
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
                                @include('/components/presentational.boxAuthButton',['title'=>'Daftar','color'=>'#32A48E'])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection