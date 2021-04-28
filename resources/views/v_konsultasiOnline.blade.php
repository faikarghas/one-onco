@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])
    <main>
        <section class="konsultasi__page">
            <div class="container">
                <div class="row">
                    <iframe src="{{ url('https://www.staging.klikdokter.com/live-chat') }}" frameborder="0"></iframe>
                </div>
            </div>
        </section>
    </main>
@endsection
