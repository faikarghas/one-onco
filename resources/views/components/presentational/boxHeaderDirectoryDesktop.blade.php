<?php
  $currentUrl = Request::segment(1);
  switch ($currentUrl) {
    case "direktori-dokter":
      $bgColor = $currentUrl == 'direktori-dokter' ? '#00A2E3;' : 'white';
      $color = $currentUrl == 'direktori-dokter' ? 'white' : '#00A2E3;';
      $image_url = $currentUrl == 'direktori-dokter' ? 'dir-dokter_white.png' : 'directori_dokter2.svg';
      break;
    case "dokter-detail":
      $bgColor = $currentUrl == 'dokter-detail' ? '#00A2E3;' : 'white';
      $color = $currentUrl == 'dokter-detail' ? 'white' : '#00A2E3;';
      $image_url = $currentUrl == 'dokter-detail' ? 'dir-dokter_white.png' : 'directori_dokter2.svg';
    break;
    case "direktori-care" : 
      $bgColor = $currentUrl == 'direktori-care' ? '#00A2E3;' : 'white';
      $color = $currentUrl == 'direktori-care' ? 'white' : '#00A2E3;';
      $image_url = $currentUrl == 'direktori-care' ? 'dir-care_white.png' : 'directori_care_center.svg';
      break;
    case "direktori-komunitas" : 
      $bgColor = $currentUrl == 'direktori-komunitas' ? '#00A2E3;' : 'white';
      $color = $currentUrl == 'direktori-komunitas' ? 'white' : '#00A2E3';
     // $image_url = $currentUrl == 'direktori-komunitas  ' ? 'directori_komunitas_white.svg' : 'directori_komunitas.svg';
     $image_url = $currentUrl == 'direktori-komunitas  ' ? 'directori_komunitas.svg' : 'directori_komunitas_white.svg';
      break;
  }
?>
@if (Request::segment(2))
  <section class="direktori__menuTab forDesktop" style="background-color: #FFF">
@else
  <section class="direktori__menuTab forDesktop">
@endif
  <div class="container">
      <div class="row">
          <div class="col-12 col-lg-4">
              @if ( $currentUrl == 'direktori-dokter' ||  $currentUrl == 'dokter-detail' )
                @include('components/presentational.boxRec',[
                  'image_url'=>$image_url,
                  'title'=>'Direktori Dokter',
                  'description'=>'Temukan dokter kanker disekitarmu',
                  'color'=>$color,
                  'colorPar'=>$color,
                  'path'=>'direktori-dokter',
                  'bgColor'=> $bgColor
                ])
              @else
                @include('components/presentational.boxRec',[
                  'image_url'=>'directori_dokter2.svg',
                  'title'=>'Direktori Dokter',
                  'description'=>'Temukan dokter kanker disekitarmu',
                  'color'=>'#00A2E3;',
                  'colorPar'=>'#808080;',
                  'path'=>'direktori-dokter',
                  'bgColor'=> 'white'
              ]) 
              @endif
          </div>
        <div class="col-12 col-lg-4">
            @if ( $currentUrl == 'direktori-care')
              @include('components/presentational.boxRec',[
                'image_url'=>$image_url,
                'title'=>'Direktori Rumah Sakit',
                'description'=>'Temukan fasilitas perawatan kanker terdekat',
                'color'=>$color,
                'colorPar'=>$color,
                'path'=>'direktori-care',
                'bgColor'=> $bgColor
              ])
              @else
              @include('components/presentational.boxRec',[
                'image_url'=>'directori_care_center.svg',
                'title'=>'Direktori Rumah Sakit',
                'description'=>'Temukan fasilitas perawatan kanker terdekat',
                'color'=>'#00A2E3;',
                'colorPar'=>'#808080;',
                'path'=>'direktori-care',
                'bgColor'=>'white'
              ])
            @endif
        </div>
        <div class="col-12 col-lg-4">
            @if ( $currentUrl == 'direktori-komunitas')
              @include('components/presentational.boxRec',[
              'image_url'=>$image_url,
              'title'=>'Direktori Komunitas',
              'description'=>'Temukan komunitas kanker disekitarmu',
              'color'=>$color,
              'colorPar'=>$color,
              'path'=>'direktori-komunitas',
              'bgColor'=> $bgColor
            ])
            @else
              @include('components/presentational.boxRec',[
              'image_url'=>'directori_komunitas.svg',
              'title'=>'Direktori Komunitas',
              'description'=>'Temukan komunitas kanker disekitarmu',
              'color'=>'#00A2E3;',
              'colorPar'=>'#808080;',
              'path'=>'direktori-komunitas',
              'bgColor'=>'white'
            ])
            @endif  
        </div>
      </div>
  </div>
</section>  