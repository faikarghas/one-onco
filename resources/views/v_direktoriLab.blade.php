@extends('components/layouts.layout')
@section('content')
  @include('components/presentational/header',['path'=>'direktori'])
  <main>
    @include('components/presentational/boxHeaderDirectoryDesktop',['path'=>'direktori'])
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