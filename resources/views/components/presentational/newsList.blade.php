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
                            $date =  date('d-m', strtotime($dateNews));
                        } else {
                            $date =  date('Y-d-m', strtotime($dateNews));
                        }
                    ?>
                    <div class="col-12 col-lg-4">
                        @include('components/presentational.boxNews',array(
                                'date'=>$date,
                                'title'=>$row->title,
                                'image_url'=>'http://oneonco-admin.herokuapp.com/data_artikel/'.$row->imgDesktop,
                                'description'=>$row->shortContent,
                                'path'=>'/berita-terkini/'.$row->slug
                        ))
                    </div>
            @endforeach
        </div>
    </div>
</div>
