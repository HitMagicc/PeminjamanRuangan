@extends('layout.user.index')

@section('mainContent')
<div class="teks-req">
    <h5>Request Ruangan</h5>
    <button class="req-bt">Kembali</button>
</div>
<div class="req-ruangan">
    <div class="teks-ruangan-form">
        Tolong lengkapi form di bawah ini!
    </div>
    <form action="{{route('request.store')}}" method="post"> 
        @csrf       
    <div class="req-ruangan-form-parent">
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="gedung">Gedung</label>
                <select name="gedung" id="gedung">
                    <option value="" disabled selected>Pilih Gedung</option>
                    @foreach ( $gedung as $g)
                    <option value="{{$g->id}}">{{$g->nama_gedung}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-kelompok-isi">
                <label for="ruangan">Ruangan</label>
                <select name="ruangan" id="ruangan">
                    <option value="" disabled selected>Pilih Ruangan</option>
                </select>
            </div>
        </div>
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal">
            </div>
            <div class="form-kelompok-isi">
                <label for="peruntukan">Peruntukan</label>
                <input type="text" id="peruntukan" name="peruntukan">
            </div>
         </div>
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="npm">NPM</label>
                <input type="number" id="npm" name="npm">
            </div>
            <div class="form-kelompok-isi">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama">
            </div>
         </div>
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="jumlah">Jumlah Peserta</label>
                <input type="number" id="jumlah" name="jumlah">
            </div>
            <div class="form-kelompok-isi">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan">
                    <option value="">Pilih Jurusan</option>
                    @foreach ( $jurusan as $j)
                    <option value="{{$j->id}}">{{$j->nama_jurusan}}</option>
                    @endforeach
                </select>
            </div>
         </div>
        
        <div class="buttonsubmit-kelompok">
            <div class="checkbox-text">
                <input type="checkbox" id="agree" name="agree">
                <label for="agree">Dengan ini, saya menyetujui segala ketentuan dan peraturan yang berlaku.</label>
            </div>
            <div class="button">
                <button name="submit" type="submit">Submit</button>
            </div>
        </div>
    </form>
    </div>

    
</div>
<script>
        const ruanganData = @json($ruangan);
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const gedungSelect = document.getElementById('gedung');
        const ruanganSelect = document.getElementById('ruangan');

        gedungSelect.addEventListener('change', function () {
            const selectedGedung = this.value;
            updateRuanganOptions(selectedGedung);
        });

        function updateRuanganOptions(gedungId) {
            // Clear current options
            ruanganSelect.innerHTML = '<option value="" disabled selected>Pilih Ruangan</option>';

            // Filter ruangan based on selected gedungId
            const filteredRuangan = ruanganData.filter(ruangan => ruangan.id_gedung == gedungId);

            // Add filtered ruangan to the select options
            filteredRuangan.forEach(ruangan => {
                const option = document.createElement('option');
                option.value = ruangan.id;
                option.textContent = ruangan.nama_ruangan;
                ruanganSelect.appendChild(option);
            });
        }
    });
</script>
@endsection