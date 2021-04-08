<div class="cari_kanker-select">
    <form>
        <div class="row">
            <div class="col-12">
                <select id="selectLokasiKanker" class="form-select mb-2" aria-label="Default select example" name="katnKaker">
                    <option selected value="null">Pilih...</option>
                    @foreach ($katKankers as $katKanker => $value)
                        <option value="{{ $katKanker }}"> {{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <select id="selectJenisKanker" class="form-select mb-2" aria-label="Default select example" name="jenisKanker" disabled>
                    <option selected>Pilih...</option>
                </select>
            </div>
          </div>
    </form>
    <div class="text-center mt-5">
        <button  class="boxReadMore">Cari</button>
    </div>
</div>