
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'login'])

    <main>
        <section class="register__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('/components/presentational.boxSuccess',['description'=>'Selamat bergabung. Mohon cek email Anda Untuk mendapatkan kata sandi.'])
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection