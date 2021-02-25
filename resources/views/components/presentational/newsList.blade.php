<div class="newsListWrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center"><strong>BERITA TERKINI</strong></h2>
                <p class="text-center mb-5"><i>Yang terbaru mengenai dunia onkologi</i></p>
            </div>
            <div class="col-12 col-lg-4">
                @include('components/presentational.boxNews',array(
                    'date'=>'24 Nov 2020',
                    'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                    'image_url'=>'https://source.unsplash.com/random',
                    'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                    'path'=>'/berita-terkini/test'
                ))
            </div>
            <div class="col-12 col-lg-4">
                @include('components/presentational.boxNews',array(
                    'date'=>'24 Nov 2020',
                    'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                    'image_url'=>'https://source.unsplash.com/random',
                    'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                    'path'=>'/berita-terkini/test'
                ))
            </div>
            <div class="col-12 col-lg-4">
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
</div>
