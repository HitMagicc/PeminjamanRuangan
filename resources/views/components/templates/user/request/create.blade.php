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
    <div class="req-ruangan-form-parent">
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="gedung">Gedung</label>
                <select name="gedung" id="gedung">
                    <option value="">Pilih Gedung</option>
                    <option value="asdsad">asdsasda</option>
                </select>
            </div>
            <div class="form-kelompok-isi">
                <label for="ruangan">Ruangan</label>
                <select name="ruangan" id="ruangan">
                    <option value="">Pilih Ruangan</option>
                    <option value="asdsad">asdsasda</option>
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
                <input type="text" id="npm" name="npm">
            </div>
            <div class="form-kelompok-isi">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama">
            </div>
         </div>
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="fakultas">Fakultas</label>
                <select name="fakultas" id="fakultas">
                    <option value="">Pilih Fakultas</option>
                    <option value="MIPA">MIPA</option>
                    <option value="Hukum">Hukum</option>
                    <option value="Kedokteran">Kedokteran</option>
                    <option value="Ilmu Budaya">Ilmu Budaya</option>
                </select>
            </div>
            <div class="form-kelompok-isi">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan">
                    <option value="">Pilih Jurusan</option>
                    <option value="asdsad">asdsasda</option>
                </select>
            </div>
         </div>
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="surat-kaprodi">Surat Kaprodi</label>
                <input type="text" id="surat-kaprodi" name="surat-kaprodi">
            </div>
            <div class="form-kelompok-isi">
                <label for="jumlah">Jumlah Peserta</label>
                <input type="number" id="jumlah" name="jumlah">
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
    </div>

    
</div>
@endsection