@extends('components/layouts.layout')
@section('content')
    @include('components/presentational/header',['path'=>'direktori'])
    <main>
        <section class="direktoriDet__header forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-center"> <strong>Cari dokter Onkologi di daerahmu:</strong></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="" method="POST">
                            <div class="col-12 mb-4 mt-4">
                                <input style="border-radius: 12px;" type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Ketik kata kunci">
                            </div>
                            <select class="form-select mb-2" aria-label="Default select example" id="selectCitiesM" name="cities">
                                <option selected>Specialisasi - Kualifikasi Dokter</option>
                                @foreach ($cities as $citie => $value)
                                    <option value="{{ $citie }}"> {{ $value }}</option>   
                                @endforeach
                            </select>
                            {{-- <select class="form-select mb-3" aria-label="Default select example" id="selectFaskesM" name="faskes">
                                <option value="">Provinsi Rumah Sakit</option>
                            </select>
                            <select class="form-select mb-3" aria-label="Default select example" id="selectFaskesM" name="faskes">
                                <option value="">Pilih Kabupaten</option>
                            </select> --}}
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @include('components/presentational/boxHeaderDirectoryDesktop',['path'=>'direktori'])
        @if (Request::segment(1)==='direktori-dokter')
            <section class="direktori__list">
                @include('components/presentational/boxFilterDirectoryDesktop',['path'=>'direktori'])
                @include('components/presentational/boxResultFilterDirectoryDokter',['path'=>'direktori']) 
            </section>
        @elseif (Request::segment(1)==='dokter-detail')
            <section class="direktori__list-detail">
                {{-- @include('components/presentational/boxFilterDirectoryDesktop',['path'=>'direktori']) --}}
                @include('components/presentational/boxDirectoryDokterDetail',['path'=>'direktori'])
            </section>
        @endif
        <section class="direktori__menuTabM bg-color_lightGrey pt-3 pb-4 forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('components/presentational.boxRec',[
                            'image_url'=>'directori_komunitas.svg',
                            'title'=>'Direktori Lab',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-lab',
                            'bgColor'=> 'white'
                        ])
                        @include('components/presentational.boxRec',[
                            'image_url'=>'directori_care_center.svg',
                            'title'=>'Direktori Care Center',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-care',
                            'bgColor'=> 'white'
                        ])
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('custom-scripts')
<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
          $value = $(this).val();
          getMoreDokters(1);
        });
        $('#spesialis').on('change', function() {
          getMoreDokters();
        });
        $('#provinsi').on('change', function() {
          data = $(this).find(':selected').attr('data-id');
          if (data !== "null") {
            axios.get(`/cities/get/${data}`).then(function (response) {
                $('select[name="kabupaten"]').empty();
                $('select[name="kabupaten"]').append('<option value=""> Pilih Kabupaten</option>');
                $.each(response.data, function(key, value){
                     $('select[name="kabupaten"]').append(new Option(value, value));
                });
            });
        }
          getMoreDokters();
        });

        $('#kabupaten').on('change', function() {
        console.log('kabupaten')
          getMoreDokters();
        });
    });
    function getMoreDokters(page) {
      var search = $('#search').val();
      var selectedSpesialis = $("#spesialis option:selected").val();
      var selectedProvinsi= $("#provinsi option:selected").val();
      var selectedKabupaten= $("#kabupaten option:selected").val();
      $.ajax({
        type: "GET",
        data: {
          'search_query':search,
          'spesialis': selectedSpesialis,
          'provinsi': selectedProvinsi,
          'kabupaten': selectedKabupaten
        },
        //url: "{{ route('dokters.get-more-dokters') }}" + "?page=" + page,
        url: "{{ route('dokters.get-more-dokters') }}",
        success:function(data) {
          $('#dokter_data').html(data);
          
        }
      });
    }
  </script>
@endpush

@stack('custom-scripts')