<div class="container">
    <div class="row listDokter" id="dokter_data">
        @foreach ($dokter as $row)
        <?php
          $rsPraktek = $row->namafaskes;
          $newRsPraktek = str_replace(',','<br>', $rsPraktek);
          $count =  substr_count($rsPraktek, ",");
          $foto = $row->Image;
          $path = public_path('/data_dokter/'.$foto);

        $isExists = file_exists($path);
        if ($isExists) {
            $fotoDokter = $foto;
        } else {
            $fotoDokter = 'doctor.svg';
        }
        ?>
        <div class="col-12 col-lg-6">
            <div class="box__rec2">
                @include('components/presentational.boxRec2',array(
                    'image_url'=>$fotoDokter,
                    'title'=>$row->fullname,
                    'spesialis'=>$row->subSpesialist,
                    'praktek'=>$newRsPraktek,
                    'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                    'color'=>'#4172CB;',
                    'path'=>'dokter-detail/'.$row->uuid,
                    'rounded'=>'rounded_img'
                ))
            </div>
        </div>
        @endforeach
    </div>
</div>