
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
                            <form>
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
                                <select class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Pilih Provinsi*</option>
                                    <option value="1">One</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Pilih Kota*</option>
                                    <option value="1">One</option>
                                    <option value="3">Three</option>
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
                                    <option value="1">One</option>
                                    <option value="3">Three</option>
                                </select>
                                <select class="form-select mb-4" aria-label="Default select example">
                                    <option selected>Pilih Profesi Anda</option>
                                    <option value="1">One</option>
                                    <option value="3">Three</option>
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