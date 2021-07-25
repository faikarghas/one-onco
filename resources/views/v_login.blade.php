@extends('components/layouts.layout')
@section('content')
    @include('components/presentational/header',['path'=>''])
    <main>
        <section class="login__page">
            <div class="container">
                <div class="row">
                    <div class="col-6 forDesktop">
                        <img class="login__page-img" src="{{asset('/images/login_image.jpg')}}" width="100%" height="100%" alt="login image">
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="box__login">
                            <h2 class="mb-5">Masuk</h2>
                            @if(session('errors'))
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                  @endforeach
                                </ul>
                              </div>
                            @endif
                            @if (Session::has('success'))
                              <div class="alert alert-success">
                                {{ Session::get('success') }}
                              </div>
                            @endif
                            @if (Session::has('error'))
                              <div class="alert alert-danger">
                                {!! Session::get('error') !!}
                              </div>
                            @endif
                            <form action={{ asset('login') }} method="post" accept-charset="utf-8" >
                            {{ csrf_field() }}  
                            @csrf
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="email"><img class="img-fluid" src="{{asset('/images/mail.png')}}" alt="" srcset=""></span>
                                    <input type="text" class="form-control" placeholder="Email Anda" aria-label="Email" aria-describedby="email" name="email">
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="password"><img class="img-fluid" src="{{asset('/images/secure.png')}}" alt="" srcset=""></span>
                                    <input id="ipss" type="password" class="form-control" aria-label="password" placeholder="Kata Sandi" name="password">
                                    <span class="input-group-text showpas" id="showpass"><img class="img-fluid" src="{{asset('/images/showpassword.png')}}" alt="" srcset=""></span>
                                  </div>
                                  <div class="input-group mb-4">
                                    <div class="captcha">
                                      <span>{!! captcha_img() !!}</span>
                                      <button type="button" class="btn btn-danger" class="reload" id="reload">
                                          &#x21bb;
                                      </button>
                                  </div>
                                  </div>
                                  <div class="input-group mb-4">
                                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                  </div>
                                @include('/components/presentational.boxAuthButton',['title'=>'Masuk','color'=>'#32A48E'])
                            </form>
                            <div class="for_or_reg mt-2">
                                <p class="text-center mb-2">Lupa kata sandi ? <a href="{{ route('forgot.password') }}" class="text-green">klik disini</a></p>
                                <div class="line_or mb-2"><span></span>Atau<span></span></div>
                                <p class="text-center mb-2">Belum memiliki akun? Daftar dibawah ini</p>
                                @include('/components/presentational.boxAuthButton',['title'=>'Daftar','color'=>'#00A2E3','type'=>'a','path'=>'register'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('custom-scripts')

@endpush
@stack('custom-scripts')
