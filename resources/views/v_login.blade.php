@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <section class="login__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box__login">
                            <h2 class="mb-5">Masuk</h2>
                            <form action={{ asset('login/auth') }} method="post" accept-charset="utf-8" >
                            {{-- {{ csrf_field() }} --}}
                            @csrf
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="email"><img class="img-fluid" src="{{asset('/images/mail.png')}}" alt="" srcset=""></span>
                                    <input type="text" class="form-control" placeholder="Email Anda" aria-label="Email" aria-describedby="email" name="email">
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="password"><img class="img-fluid" src="{{asset('/images/secure.png')}}" alt="" srcset=""></span>
                                    <input id="ipss" type="password" class="form-control" aria-label="password" placeholder="Kata Kunci" name="password">
                                    <span class="input-group-text" id="showpass"><img class="img-fluid" src="{{asset('/images/showpassword.png')}}" alt="" srcset=""></span>
                                  </div>
                                @include('/components/presentational.boxAuthButton',['title'=>'Masuk','color'=>'#32A48E'])
                            </form>
                            <div class="for_or_reg mt-4">
                                <p class="text-center">Lupa kata kunci ? <a href="/pengaturan" class="text-green">klik disini</a></p>
                                <div class="line_or"><span></span>Atau<span></span></div>
                                <p class="text-center">Belum terdaftar ? Daftar dibawah ini</p>
                                @include('/components/presentational.boxAuthButton',['title'=>'Daftar','color'=>'#00A2E3','type'=>'a','path'=>'register'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection