<div class="container">
    <div class="row listDokter" id="dokter_data">
        @foreach ($dokter as $row)
        <?php
          $rsPraktek = $row->namafaskes;
          $newRsPraktek = str_replace(',','<br>', $rsPraktek);
          $count =  substr_count($rsPraktek, ",")
        ?>
        <div class="col-12 col-lg-6">
            <div class="box__rec2">
                @include('components/presentational.boxRec2',array(
                    'image_url'=>'doctor.svg',
                    'title'=>$row->fullname,
                    'spesialis'=>$row->subSpesialist,
                    'praktek'=>$newRsPraktek,
                    'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                    'color'=>'#4172CB;',
                    'path'=>'dokter-detail/'.$row->dokterId,
                    'rounded'=>'rounded_img'
                ))
            </div>
        </div>
        @endforeach
    </div>
</div>