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
                            <h2 class="text-center mb-2">Lupa Kata Sandi?</h2>
                            <p class="text-center mb-5" style="color:#adadad">Untuk mendapatkan password baru, masukan email yang Anda gunakan saat pendaftaran Akun One Onco</p>
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
                                {{ Session::get('error') }}
                              </div>
                            @endif
                            @if (Session::has('status'))
                            <div class="alert alert-danger">
                              {{ Session::get('status') }}
                            </div>
                          @endif
                            <form method="POST" action="{{ url('/reset_password_without_token') }}">
                            {{-- {{ csrf_field() }} --}}
                            @csrf
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="email"><img class="img-fluid" src="{{asset('/images/mail.png')}}" alt="" srcset=""></span>
                                    <input type="text" class="form-control" placeholder="Email Anda" aria-label="Email" aria-describedby="email" name="email">
                                </div>
                                @include('/components/presentational.boxAuthButton',['title'=>'Masuk','color'=>'#32A48E'])
                                <br>
                                <p class="text-center mb-2">Belum memiliki akun? <a href="{{route('register')}}">Daftar disini</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection