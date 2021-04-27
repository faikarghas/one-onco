@extends('components/layouts.layout')
@section('content')
    @include('components/presentational/header',['path'=>'direktori'])
    <main>
        <section class="direktoriDet__header forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <h3 class="text-center"><strong>Cari Care Center di daerahmu:</strong></h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <form action="" method="POST">
                            <div class="col-12 mb-2 mt-4">
                                <input style="border-radius: 12px;" type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Ketik kata kunci">
                            </div>
                            <div class="col">
                                <select class="form-select mb-2" aria-label="Default select example" id="selectProvinces4" name="provinces3">
                                    <option selected>Pilih Kota</option>
                                    @foreach ($provinces as $province => $value)
                                        <option value="{{ $province }}"> {{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select mb-2" aria-label="Default select example" id="selectCities4" name="cities3">
                                    <option value="">Pilih Kabupaten</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @include('components/presentational/boxHeaderDirectoryDesktop',['path'=>'direktori'])

        @if (empty(Request::segment(2)))
        <section class="direktori__list">
            @include('components/presentational/boxFilterDirectoryDesktop',['path'=>'direktori'])
            @include('components/presentational/boxResultFilterDirectoryFaskes',['path'=>'direktori']) 
        </section>
        @else
        <section class="direktori__list-detail">
          {{-- @include('components/presentational/boxFilterDirectoryDesktop',['path'=>'direktori']) --}}
          @include('components/presentational/boxDirectoryFaskesDetail',['path'=>'direktori']) 
        </section>
        @endif
        <section class="direktori__menuTabM bg-color_lightGrey pt-3 pb-4 forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('components/presentational.boxRec',array(
                            'image_url'=>'directori_dokter2.svg',
                            'title'=>'Direktori Dokter',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-dokter',
                            'bgColor'=> 'white'
                        ))
                        @include('components/presentational.boxRec',array(
                            'image_url'=>'directori_komunitas.svg',
                            'title'=>'Direktori Lab',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-lab',
                            'bgColor'=> 'white'
                        ))
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
          getMoreFaskes(1);
        });
        $('#spesialis').on('change', function() {
          getMoreFaskes();
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
          getMoreFaskes();
        });

        $('#kabupaten').on('change', function() {
        console.log('kabupaten')
          getMoreFaskes();
        });
    });
    function getMoreFaskes(page) {
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
        url: "{{ route('faskes.get-more-faskes') }}",
        success:function(data) {
          $('#faskes_data').html(data);
        }
      });
    }
  </script>
@endpush

@stack('custom-scripts')





