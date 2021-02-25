<?php
$slug = 'test';
?>
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner">
            <img src="{{asset('/images/perPendamping.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Persiapan <br> untuk Pendamping</h2>
                <p>Membantu perndamping untuk memahami <br> penderita kanker dan keluarga</p>
            </div>
        </div>
        <section class="perawatanKanker__page forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="list__component">
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/untuk-pendamping/jenis-olahraga">Mengolah Emosi</a>
                                    <p>Mengatasi efek samping emosional dari kanker dan pengobatan.</p>
                                </div>
                            </div>
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/untuk-pendamping/jenis-olahraga">Merawat yang Terkasih</a>
                                    <p>Kiat tentang perawatan dan mengatasinya.</p>
                                </div>
                            </div>
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/untuk-pendamping/jenis-olahraga">Manajemen Perawatan</a>
                                    <p>Temukan cara terbaik dan efisien dalam perawatan kanker.</p>
                                </div>
                            </div>
                            <div class="row list__component-list--item">
                                <div class="col-1">
                                    <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                </div>
                                <div class="col-11 ps-4">
                                    <a href="/untuk-pendamping/jenis-olahraga">Pengaruh Fisik, Emosional, dan Sosial</a>
                                    <p>Cari tau mengenai perawatan paliatif dan perawatan suportif. Berfokus pada pengurangan gejala, meningkatkan kualitas hidup, dan mendukung pasien dan keluarganya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tab__menu forDesktop-dflex">
            <div class="col-cs-4">
                <div class="list__component">
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a class="{{ request()->is('untuk-pendamping') ? 'active' : '' }}" href="/untuk-pendamping">Mengolah Emosi</a>
                            <div class="tab_line {{ request()->is('untuk-pendamping') ? '' : 'd-none' }}"></div>
                        </div>
                    </div>
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a class="{{ request()->is('untuk-pendamping/merawat-yang-terkasih') ? 'active' : '' }}" href="/untuk-pendamping/merawat-yang-terkasih">Merawat yang Terkasih</a>
                            <div class="tab_line {{ request()->is('untuk-pendamping/merawat-yang-terkasih') ? '' : 'd-none' }}"></div>
                        </div>
                    </div>
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a class="{{ request()->is('untuk-pendamping/manajemen-perawatan') ? 'active' : '' }}" href="/untuk-pendamping/manajemen-perawatan">Manajemen Perawatan</a>
                            <div class="tab_line {{ request()->is('untuk-pendamping/manajemen-perawatan') ? '' : 'd-none' }}"></div>
                        </div>
                    </div>
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a class="{{ request()->is('untuk-pendamping/pengaruh-fisik') ? 'active' : '' }}" href="/untuk-pendamping/pengaruh-fisik">Pengaruh Fisik, Emosional, dan Sosial</a>
                            <div class="tab_line {{ request()->is('untuk-pendamping/pengaruh-fisik') ? '' : 'd-none' }}"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-cs-8">
                <div class="tentangKami__page-intro mb-5">
                    <img class="mb-5" src="{{asset('/images/logo_oneonco_black.png')}}" width="220px" alt="logo-oneonco">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quasi porro amet itaque, nulla dolor nobis atque aliquid iure ullam. Mollitia temporibus deserunt velit, quo culpa beatae ullam minus dignissimos?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quasi porro amet itaque, nulla dolor nobis atque aliquid iure ullam. Mollitia temporibus deserunt velit, quo culpa beatae ullam minus dignissimos?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque corrupti delectus facere doloremque dolorem aspernatur? Eligendi quod ut soluta tempora voluptatem enim molestias pariatur repellendus aliquid ipsa, qui quae facere totam asperiores dolore deserunt? Placeat, velit deserunt autem corporis illum optio dicta sunt. Nostrum, fuga excepturi! Quidem molestias quaerat accusamus modi distinctio eveniet quos quas ipsum veritatis obcaecati eos a, enim placeat delectus numquam corporis nihil nulla possimus harum, velit qui sapiente repellat ex. Dolores optio repudiandae, fugiat facilis tenetur hic voluptates deleniti corrupti aliquid iure, perspiciatis quod dolor aspernatur vel laboriosam modi fugit perferendis placeat quos. Sint, totam corporis?</p>
                    <br>
                    <img class="mb-5" src="{{asset('/images/kalbe.png')}}" width="180px" alt="" srcset="">
                    <h1><strong>SEJARAH KALBE</strong></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda quasi porro amet itaque, nulla dolor nobis atque aliquid iure ullam. Mollitia temporibus deserunt velit, quo culpa beatae ullam minus dignissimos?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id atque neque quasi cumque vitae tempore minima repudiandae placeat necessitatibus itaque! Rem molestias delectus, tenetur voluptatibus ipsa quaerat, exercitationem quia ab magnam ipsum laboriosam veniam quasi molestiae maxime assumenda. Quidem optio vitae mollitia voluptatem in necessitatibus, at quasi corporis itaque inventore laborum hic eveniet quibusdam repellendus nisi distinctio nesciunt odio voluptatibus reprehenderit totam maiores dignissimos exercitationem, aliquam quisquam? Dicta asperiores placeat praesentium nemo beatae autem harum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad sapiente distinctio quos rem magnam nostrum vitae, modi doloremque quaerat numquam explicabo quas ipsam eligendi illo id et sit commodi quam minus dolores. Odio assumenda officia velit fugiat iste aperiam voluptatum!</p>
                </div>
            </div>
        </section>
        @include('/components/presentational.newsList',[])
    </main>
@endsection