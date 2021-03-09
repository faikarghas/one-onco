@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'/'])
    <main>
        <section class="pb-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Hasil Pencarian</h1>
                        <h2>Berita :</h2>
                        <h2>Jurnal :</h2>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection