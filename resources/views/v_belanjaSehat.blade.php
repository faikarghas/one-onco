@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <section class="belanja__page">
            <div class="container">
                <div class="row">
                    <iframe src="https://healthmall.medkomtek.net/products/category/suplemen-vitamin" frameborder="0" width="100%" height="600" ></iframe>
                </div>
            </div>
        </section>
    </main>
@endsection
