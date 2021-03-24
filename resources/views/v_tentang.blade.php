
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>''])

    <main>
        <div class="box__banner">
            <img src="{{asset('/images/solusiOnkologiBanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Solusi Total<br>Onkologi</h2>
            </div>
        </div>
        <section class="tentangKami__page forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12 forMobile">
                        <div class="tentangKami__page-intro mb-5">
                            <p>Mempermudah dan mendampingi pasien kanker melalui naik dan turunfnya hidup, itulah nilai utama dari One Onco.</p>
                         </div>
                   </div>
                    <div class="col-12 col-md-6">
                        <div class="list__component">
                            @foreach($listingKatArtikel as $row)
                                <div class="row list__component-list--item">
                                    <div class="col-1">
                                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                                    </div>
                                    <div class="col-11 ps-4">
                                        <a href="/tentang-kami/{{ $row->slug }}">{{ $row->title }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 mt-4 mb-5 forMobile"><hr></div>
                    <div class="col-12 col-md-6">
                        <div class="text-center mb-5">
                            <img src="{{asset('/images/kalbe.png')}}" width="180px" alt="" srcset="">
                        </div>
                        <div class="tentangKami__page-intro mb-5">
                            <h3>SEJARAH KALBE</h3>
                            <p>Pilihan olahraga yang bisa dilakukan <br> oleh pasien kanker</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tentangKami__pageD tab__menu forDesktop-dflex">
            <div class="col-cs-4">
                <div class="list__component">
                @foreach($listingKatArtikel as $row)
                    <div class="row list__component-list--item">
                        <div class="col-1">
                            <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                        </div>
                        <div class="col-11 ps-4">
                            <a class="{{ request()->is('tentang-kami') ? 'active' : '' }}" href="/tentang-kami/{{ $row->slug }}">{{ $row->title }}</a>
                            @if ( $row->slug ==='' ) 
                               <div class="tab_line {{ request()->is('tentang-kami') ? '' : 'd-none' }}"></div>
                            @endif
                        </div>
                    </div>
                @endforeach
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
        <section class="berita__section" style="background-color: #e0e0e0;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center"><strong>BERITA TERKINI</strong></h2>
                        <p class="text-center mb-5"><i>Yang terbaru mengenai dunia onkologi</i></p>
                    </div>
                    @foreach($listingNews as $row)
                    <div class="col-12 col-md-4">
                        @include('components/presentational.boxNews',array(
                            'date'=>$row->createdAt,
                                'title'=>$row->title,
                                'image_url'=>'https://source.unsplash.com/random',
                                'description'=>$row->shortContent,
                                'path'=>'berita-terkini'
                        ))
                    </div>
                    @endforeach

                    <div class="col-12 text-center mt-5">
                        @include('components/presentational.boxShowMore',array(
                            'title'=>'Tampilkan lainnya',
                            'path'=>'berita-terkini'
                        ))
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection