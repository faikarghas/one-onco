@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <section class="belanja__page">
            <div class="container">
                <div class="row">
                    {{-- <iframe src="https://toko.ly/klikdokter/categories/196414/laboratorium-paramita?kdUser={{ session()->get('tokenUser') }}"" frameborder="0" width="100%" height="600" target="_parent" ></iframe> --}}
                    <iframe src="https://toko.ly/klikdokter/categories/267231/test-skrining-kanker?kdUser={{ session()->get('tokenUser') }}"" frameborder="0" width="100%" height="600" target="_parent" ></iframe>
                </div>
            </div>
        </section>
    </main>
@endsection
