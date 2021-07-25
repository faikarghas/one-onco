@extends('components/layouts.layout')
@section('content')
    @include('components/presentational/header',['path'=>'direktori'])
    <main>
        @include('components/presentational/boxHeaderDirectoryDesktop',['path'=>'direktori'])
        @if (Request::segment(1)==='direktori-dokter')
            <section class="direktori__list">
                @include('components/presentational/boxFilterDirectoryDesktop',['path'=>'direktori'])
                @include('components/presentational/boxResultFilterDirectoryDokter',['path'=>'direktori'])
                <div class="container text-center mt-3">
                    <div class="row">
                        <div class="col-12 ">
                            <p style="color:#c3c2c2;">Segala konten yang diterbitkan/ publikasikan hanya ditujukan untuk kepentingan penyampaian informasi kepada public. Jadwal dan informasi terkait layanan dapat berubah sewaktu-waktu tanpa pemberitahuan. <br/> Seluruh pengguna diharapkan untuk mengkonfirmasi jadwal dengan layanan sebelumnya.</p>
                        </div>
                    </div>
                </div> 
            </section>
        @elseif (Request::segment(1)==='dokter-detail')
            <section class="direktori__list-detail">
                @include('components/presentational/boxDirectoryDokterDetail',['path'=>'direktori'])
            </section>
        @endif
        <section class="direktori__menuTabM bg-color_lightGrey pt-3 pb-4 forMobile">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('components/presentational.boxRec',[
                            'image_url'=>'directori_care_center.svg',
                            'title'=>'Direktori Rumah Sakit',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-care',
                            'bgColor'=> 'white'
                        ])
                        @include('components/presentational.boxRec',[
                            'image_url'=>'directori_komunitas.svg',
                            'title'=>'Direktori Komunitas',
                            'description'=>'Cari tau mengenai perawatan kanker yang diderita',
                            'color'=>'#00A2E3;',
                            'colorPar'=>'#808080;',
                            'path'=>'direktori-lab',
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
    document.addEventListener('DOMContentLoaded', function () {
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
        // url: "{{ route('dokters.get-more-dokters') }}" + "?page=" + page,
        //url: `${baseUrl}/get-more-dokters`,
        url: "{{ route('dokters.get-more-dokters') }}",
        success:function(data) {
            console.log(data);
            $('#dokter_data').html(data);
        }
    });
    }    
</script>
@endpush
@stack('custom-scripts')