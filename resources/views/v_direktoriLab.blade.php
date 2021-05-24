@extends('components/layouts.layout')
@section('content')
  @include('components/presentational/header',['path'=>'direktori'])
  <main>
    <section class="direktoriDet__header forMobile">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <h3 class="text-center mb-4"> <strong>Cari dokter Onkologi di daerahmu:</strong></h3>
                        <div class="input-group">
                            <input  type="search" class="form-control py-2 mr-1 pr-5 mb-2" id="search_mobile" placeholder="Ketik kata kunci">
                            {{-- <span class="input-group-append">
                                <button class="btn rounded-pill border-0 "  style="margin-left: -3rem !important;" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                      </svg>
                                </button>
                            </span> --}}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <form action="">
                        <div class="row">
                          <div class="col-12">
                            @if (Request::segment(1)==='direktori-dokter' || Request::segment(1)==='dokter-detail')
                              <select class="form-select mb-2" aria-label="Default select example" id="spesialis_mobile" name="spesialis">
                                  <option value="ALL">{\App\Constants\GlobalConstants::ALLSpec}}</option>
                                  @foreach ($spesialis as $spesial => $value)
                                      <option>{{ $value }}</option>
                                  @endforeach
                              </select>
                              @elseif (Request::segment(1)==='direktori-care')
                              <select class="form-select mb-2" aria-label="Default select example" id="spesialis_mobile" name="spesialis">
                                <option value="ALL">{{\App\Constants\GlobalConstants::ALLSpec}}</option>
                                @foreach(\App\Constants\GlobalConstants::LIST_LAYANAN as $type)
                                    <option>{{ $type }}</option>
                                @endforeach
                            </select>
                              @endif
                          </div>
                          <div class="col-12">
                              <select class="form-select mb-2" aria-label="Default select example" id="provinsi_mobile" name="provinsi">
                                  <option value="ALL">{{\App\Constants\GlobalConstants::ALLProv}}</option>
                                  @foreach ($cities as $citi => $value)
                                      <option data-id="{{ $citi }}">{{ $value }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="col-12">
                              <select class="form-select mb-2" aria-label="Default select example" id="kabupaten_mobile" name="kabupaten">
                                <option value="ALL">Pilih Kabupaten - Kabupaten RS</option>
                              </select>
                          </div>
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
        @include('components/presentational/boxResultFilterDirectoryKomunitas',['path'=>'direktori'])
        <div class="container text-center mt-3">
            <div class="row">
                <div class="col-12 ">
                    <p style="color:#c3c2c2;">Segala konten yang diterbitkan/ publikasikan hanya ditujukan untuk kepentingan penyampaian informasi kepada public. Jadwal dan informasi terkait layanan dapat berubah sewaktu-waktu tanpa pemberitahuan. <br/> Seluruh pengguna diharapkan untuk mengkonfirmasi jadwal dengan layanan sebelumnya.</p>
                </div>
            </div>
        </div>
        </section>
      @else
      <section class="direktori__list-detail">
        {{-- @include('components/presentational/boxFilterDirectoryDesktop',['path'=>'direktori']) --}}
        @include('components/presentational/boxDirectoryKomunitasDetail',['path'=>'direktori']) 
      </section>
      @endif

  </main>
@endsection
@push('custom-scripts')
<script>
        document.addEventListener('DOMContentLoaded', function () {
        $('#search').on('keyup', function() {
          $value = $(this).val();
          getMoreKomunitas(1);
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
        getMoreKomunitas();
        });

        $('#kabupaten').on('change', function() {
        getMoreKomunitas();
        });
    });

    function getMoreKomunitas(page) {
    var search = $('#search').val();
    var selectedProvinsi= $("#provinsi option:selected").val();
    var selectedKabupaten= $("#kabupaten option:selected").val();
    $.ajax({
        type: "GET",
        data: {
        'search_query':search,
        'provinsi': selectedProvinsi,
        'kabupaten': selectedKabupaten
        },
        url: "{{ route('faskes.get-more-komunitas') }}",
        success:function(data) {
            console.log(data);
            $('#faskes_data').html(data);
        }
    });
    }
  </script>
@endpush
@stack('custom-scripts')