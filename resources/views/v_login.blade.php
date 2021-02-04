@extends('components/layouts.layout')
@include('components/presentational/header',['path'=>''])

@section('content')
    <main>
        <section class="login__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box__login">
                            <h2 class="mb-5">Masuk</h2>
                            <form >
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="email"><img class="img-fluid" src="{{asset('/images/mail.png')}}" alt="" srcset=""></span>
                                    <input type="text" class="form-control" placeholder="Email Anda" aria-label="Email" aria-describedby="email">
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="password"><img class="img-fluid" src="{{asset('/images/secure.png')}}" alt="" srcset=""></span>
                                    <input type="password" class="form-control" aria-label="password" placeholder="Kata Kunci">
                                    <span class="input-group-text" id="showpass"><img class="img-fluid" src="{{asset('/images/showpassword.png')}}" alt="" srcset=""></span>
                                  </div>
                                @include('/components/presentational.boxAuthButton',['title'=>'Masuk','color'=>'#32A48E'])
                            </form>
                            <div class="for_or_reg mt-4">
                                <p class="text-center">Lupa kata kunci ? <span class="text-green">klik disini</span></p>
                                <div class="line_or"><span></span>Atau<span></span></div>
                                <p class="text-center">Belum terdaftar ? Daftar dibawah ini</p>
                                @include('/components/presentational.boxAuthButton',['title'=>'Daftar','color'=>'#00A2E3'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection