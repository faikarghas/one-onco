@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])
    <main>
        <section class="belanja__page">
            <div class="container-fluid">
                <div class="row">
                    <iframe id="belanja_sehat_iframe" src="https://healthmall.medkomtek.net/products/category/suplemen-vitamin?kdUser={{ session()->get('tokenUser') }}" frameborder="0" width="100%" height="800" target="_parent" ></iframe>
                </div>
            </div>
        </section>
    </main>
@endsection
