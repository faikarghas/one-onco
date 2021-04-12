<div class="newsListWrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between mb-5">
                <div>
                    <h2 class="text-center"><strong>BERITA TERKINI</strong></h2>
                    <p class="text-center"><i>Yang terbaru mengenai dunia onkologi</i></p>
                </div>
                @include('components/presentational.boxShowMore',array(
                    'title'=>'Lihat semua',
                    'path'=>'berita-terkini'
                ))
            </div>
            @foreach($listingNews as $row)
                    <div class="col-12 col-lg-4">
                        @include('components/presentational.boxNews',array(
                            'date'=>$row->created_at,
                                'title'=>$row->title,
                                'image_url'=>'https://source.unsplash.com/random',
                                'description'=>$row->shortContent,
                                'path'=>'/berita-terkini/'.$row->slug
                        ))
                    </div>
            @endforeach
        </div>
    </div>
</div>
