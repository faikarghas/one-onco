
@extends('components/layouts.layout')

@section('content')
    @include('components/presentational/header',['path'=>'tentang-kami'])

    <main>
        <div class="box__banner">
            <img src="{{asset('/images/solusiOnkologiBanner.jpg')}}" width="100%" height="100%" alt="">
            <div class="box__banner-desc">
                <h2>Solusi Total<br>Onkologi</h2>
            </div>
        </div>
        <section class="tentangKami__page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tentangKami__page-content">
                            <h1><strong>Tentang Kami</strong></h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ipsa, laboriosam eveniet similique magnam maiores expedita consectetur eos nesciunt laudantium, labore voluptas delectus voluptates odio minima assumenda fugiat placeat officiis autem explicabo reiciendis at ad rem fuga. Perferendis saepe vitae iure a exercitationem numquam dolor velit error rem, suscipit, sunt autem cupiditate aspernatur facilis, eligendi accusantium! Fugit debitis voluptatibus nesciunt, qui aliquam reprehenderit id cumque dolore assumenda sequi, vel molestiae illo asperiores nihil quas laboriosam cum aperiam impedit veritatis. Ex obcaecati nisi nesciunt officia suscipit adipisci doloremque id nihil. Quidem magnam blanditiis deserunt, itaque distinctio laborum consequatur quo quae praesentium magni natus perferendis eos. Impedit perspiciatis nemo ad voluptatibus nihil eos qui deserunt incidunt eum ipsum inventore quis, sit maiores et ullam. Aliquid ratione aperiam, eum facilis voluptatem id. Nostrum fuga quisquam animi laborum, sit corrupti tenetur exercitationem saepe asperiores libero voluptatum ipsam rerum illo. Soluta sapiente nobis doloribus doloremque sequi, possimus incidunt similique reiciendis suscipit tenetur neque fugit, ratione, illum accusamus perferendis alias natus cumque dolore exercitationem eum totam voluptatum rerum in laboriosam! Minima quos ipsum repudiandae repellat aut odit sequi nihil, maxime dicta, nam sed ex similique est fuga eos aperiam sapiente perspiciatis unde qui temporibus voluptatibus illum vitae debitis? Quis saepe aperiam optio ullam nostrum, amet corrupti consectetur dignissimos? Magnam, sunt a distinctio eum deserunt voluptates quibusdam rerum laboriosam ullam reiciendis! Dolorem accusantium fuga quam culpa iusto consequatur dicta nisi placeat impedit facere corrupti quos cumque qui harum, eveniet, eaque magni architecto, temporibus nesciunt natus voluptatem minima perspiciatis. Sed velit porro molestias alias officiis quis odit eaque ullam a dolorum obcaecati blanditiis perferendis veniam, eligendi repudiandae, incidunt totam et mollitia dicta vitae eius rem quae doloremque! Repellat possimus quaerat nisi vero nesciunt minus odit, quam eum est veniam doloremque odio excepturi architecto quis! Dolores doloremque odio sunt!</p>
                        </div>
                        <hr class="mt-5 mb-5">
                    </div>
                </div>
                <div class="row list__component-list--item">
                    <div class="col-1">
                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                    </div>
                    <div class="col-11 ps-4">
                        <a href="/tentang-kami/tentang">Nilai-nilai Kami</a>
                    </div>
                </div>
                <div class="row list__component-list--item">
                    <div class="col-1">
                        <img src="{{asset('images/rarrow.png')}}" width="18px" alt="round-arrow">
                    </div>
                    <div class="col-11 ps-4">
                        <a href="/tentang-kami/tentang">Kolaborasi sebagai <br> semangat ONEOnco</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="berita__section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center"><strong>BERITA TERKINI</strong></h2>
                        <p class="text-center mb-5"><i>Yang terbaru mengenai dunia onkologi</i></p>
                    </div>
                    <div class="col-12 col-md-4">
                        @include('components/presentational.boxNews',array(
                            'date'=>'24 Nov 2020',
                            'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                            'image_url'=>'https://source.unsplash.com/random',
                            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                            'path'=>'/berita-terkini/test'
                        ))
                    </div>
                    <div class="col-12 col-md-4">
                        @include('components/presentational.boxNews',array(
                            'date'=>'24 Nov 2020',
                            'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                            'image_url'=>'https://source.unsplash.com/random',
                            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                            'path'=>'/berita-terkini/test'
                        ))
                    </div>
                    <div class="col-12 text-center mt-5">
                        @include('components/presentational.boxShowMore',array(
                            'title'=>'Tampilkan lainnya',
                            'path'=>'/berita-terkini'
                        ))
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection