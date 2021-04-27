<div class="newsListWrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between mb-5">
                <div>
                    <h2 class="text-center"><strong>BERITA TERKINI</strong></h2>
                </div>
                @include('components/presentational.boxShowMore',array(
                    'title'=>'Lihat semua',
                    'path'=>'berita-terkini'
                ))
            </div>
            @foreach($listingNews as $row)
                    <?php 
                        $yearCurrent  = date('Y');
                        $dateNews =  date('Y', strtotime($row->publishDate));
                        if ($yearCurrent == $dateNews ){
                            $date =  date('d-M', strtotime($row->publishDate));
                        } else {
                            $date =  date('d-M-Y', strtotime($row->publishDate));
                        }
                    ?>
                    <div class="col-12 col-lg-4">
                        @include('components/presentational.boxNews',array(
                                'date'=>$date,
                                'title'=>$row->title,
                                'image_url'=>$row->imgDesktop,
                                'description'=>$row->shortContent,
                                'path'=>'/berita-terkini/'.$row->slug
                        ))
                    </div>
            @endforeach
        </div>
    </div>
</div>
