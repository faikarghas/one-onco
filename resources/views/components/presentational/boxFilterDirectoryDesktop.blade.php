<div class="container mb-5 box_fliter">
    <div class="row">
        <div class="col-12">
          <div class="row justify-content-center">
            @if (Request::segment(1)==='direktori-dokter')
              <h3 class="text-start mb-0"><strong>Cari dokter kanker di sekitarmu:</strong></h3>
            @elseif(Request::segment(1)==='direktori-komunitas')
             <h3 class="text-start mb-0"><strong>Cari komunitas kanker di sekitarmu:</strong></h3>
            @elseif(Request::segment(1)==='direktori-care')
              <h3 class="text-start mb-0"><strong>Cari rumah sakit kanker di sekitarmu:</strong></h3>
            @endif
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-12 mb-4 mt-4">
                <div class="input-group">
                    <input  type="search" class="form-control py-2 mr-1 pr-5" id="search" placeholder="Ketik kata kunci">
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
          <form action="">
            <div class="row">
              @if (Request::segment(1)==='direktori-komunitas')

              @else
                <div class="col-12 col-md-4">
                  @if (Request::segment(1)==='direktori-dokter')
                    <select class="form-select mb-2" aria-label="Default select example" id="spesialis" name="spesialis">
                        <option>{{\App\Constants\GlobalConstants::ALLSpec}}</option>
                        @foreach ($spesialis as $spesial => $value)
                            <option>{{ $value }}</option>
                        @endforeach
                    </select>
                    @elseif (Request::segment(1)==='direktori-care')
                    <select class="form-select mb-2" aria-label="Default select example" id="spesialis" name="spesialis">
                      <option>{{\App\Constants\GlobalConstants::ALLSpec2}}</option>
                      {{-- @foreach(\App\Constants\GlobalConstants::LIST_LAYANAN as $type)
                          <option>{{ $type }}</option>
                      @endforeach --}}
                       @foreach ($selectLayanan as $layanan => $value)
                            <option data-id="{{ $layanan }}">{{ $value }}</option>
                        @endforeach
                  </select>
                    @endif
                </div>
              @endif
              @if (Request::segment(1)==='direktori-komunitas')
                <div class="col-12 col-md-6">
                    <select class="form-select mb-3" aria-label="Default select example" id="provinsi" name="provinsi">
                        <option>{{\App\Constants\GlobalConstants::ALLProv}}</option>
                        @foreach ($cities as $citi => $value)
                            <option data-id="{{ $citi }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-md-6">
                  <select class="form-select mb-3" aria-label="Default select example" id="kabupaten" name="kabupaten">
                    <option value="">Pilih Kabupaten</option>
                  </select>
                </div>
              @else
                <div class="col-12 col-md-4">
                  <select class="form-select mb-3" aria-label="Default select example" id="provinsi" name="provinsi">
                      <option>{{\App\Constants\GlobalConstants::ALLProv}}</option>
                      @foreach ($cities as $citi => $value)
                          <option data-id="{{ $citi }}">{{ $value }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="col-12 col-md-4">
                  <select class="form-select mb-3" aria-label="Default select example" id="kabupaten" name="kabupaten">
                    <option value="">Pilih Kabupaten</option>
                  </select>
                </div>
              @endif
            </div>
          </form>
        </div>
    </div>
  </div>
</div>