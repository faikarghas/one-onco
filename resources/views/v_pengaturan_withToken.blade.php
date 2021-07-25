@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'login'])

    <main>
        <section class="setting__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box__setting">
                            <h2 class="mb-5"> <img width="20px" src="{{asset('/images/settingBlack.png')}}" alt="">Ubah Kata Sandi</h2>
                            <form method="post" action="{{ route('reset.passwordwithToken') }}">
                                <input type="hidden" name="token" value="{{ $token }}">
                                @csrf
                                @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{ $error }}</p>
                                @endforeach
                                {{-- <p class="m-0">Rubah Kata Sandi</p> --}}
                                <div class="input-group mb-4">
                                    <input type="email" class="form-control" placeholder="Email*" aria-label="email" name="email" value="{{ old('email') }}"> 
                                </div>
                                <div class="input-group mb-4">
                                    <input id="ipss2" type="password" class="form-control" placeholder="Kata sandi baru*" aria-label="sandi-baru" name="new_password">
                                    <span class="input-group-text showpas" id="showpassbaru"><img class="img-fluid" src="{{asset('/images/showpassword.png')}}" width="20px" alt="" srcset=""></span>
                                </div>
                                <div class="input-group mb-4">
                                    <input id="ipss3" type="password" class="form-control" placeholder="Ulangi kata sandi baru*" aria-label="re-sandi-baru" name='new_confirm_password'>
                                    <span class="input-group-text showpas" id="showpassulang"><img class="img-fluid" src="{{asset('/images/showpassword.png')}}" width="20px" alt="" srcset=""></span>
                                </div>
                                @include('/components/presentational.boxAuthButton',['title'=>'Masuk','color'=>'#32A48E'])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection