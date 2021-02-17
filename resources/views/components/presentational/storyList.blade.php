<div class="newsListWrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-5"><strong>CERITA TERBARU</strong></h2>
            </div>
            <div class="col-12 col-md-4">
                @include('components/presentational.boxNews',array(
                    'date'=>'24 Nov 2020',
                    'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                    'image_url'=>'https://source.unsplash.com/random',
                    'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                    'path'=>'/cerita-survivor/test'
                ))
            </div>
            <div class="col-12 col-md-4">
                @include('components/presentational.boxNews',array(
                    'date'=>'24 Nov 2020',
                    'title'=>'Perbandingan biaya kemotrapi antara indonesia & Malaysia 2020',
                    'image_url'=>'https://source.unsplash.com/random',
                    'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam perspiciatis dolor rem blanditiis. Vitae veniam, aliquid molestias non nostrum',
                    'path'=>'/cerita-survivor/test'
                ))
            </div>
            <div class="col-12 text-center mt-5">
                @include('components/presentational.boxShowMore',array(
                    'title'=>'Tampilkan lainnya'
                ))
            </div>
        </div>
    </div>
</div>
