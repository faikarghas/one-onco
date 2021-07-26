@extends('components/layouts.layout')
@section('content')
    @include('components/presentational/header',['path'=>''])
    <main>
        <section class="konsultasi__page pe-0 ps-0">
            <div class="container-fluid">
                <div class="row">
                    <iframe src="https://livechat.klikdokter.com/?filter=124,38,9?kdUser={{ session()->get('tokenUser') }}" frameborder="0" width="100%" height="600" ></iframe>
                </div>
            </div>
        </section>
    </main>
@endsection

{{-- https://livechat.klikdokter.com/?filter=124,38,9 --}}