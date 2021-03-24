<div class="newsListWrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center"><strong>BERITA TERKINI</strong></h2>
                <p class="text-center mb-5"><i>Yang terbaru mengenai dunia onkologi</i></p>
            </div>
            @foreach($listingNews as $row)
                    <div class="col-12 col-lg-4">
                        @include('components/presentational.boxNews',array(
                            'date'=>$row->createdAt,
                                'title'=>$row->title,
                                'image_url'=>'https://source.unsplash.com/random',
                                'description'=>$row->shortContent,
                                'path'=>'/berita-terkini/'.$row->slug
                        ))
                    </div>
            @endforeach
            <div class="col-12 text-center mt-5">
                @include('components/presentational.boxShowMore',array(
                    'title'=>'Tampilkan lainnya',
                    'path'=>'/berita-terkini'
                ))
            </div>
        </div>
    </div>
</div>
