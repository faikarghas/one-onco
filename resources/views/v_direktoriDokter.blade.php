@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'/'])
    <main>
        <section class="direktoriDet__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-center">Cari dokter Onkologi di daerahmu:</h3>
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
    </main>
@endsection