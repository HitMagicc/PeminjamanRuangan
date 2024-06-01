@extends('layout.admin.index')
@section('mainContent')
<div class="teks-req">
    <h5>Tambah Ruangan</h5>
    <button class="button-kanan-atas kembali">Kembali</button>
    <!--button class="req-bt">Kembali</button-->
</div>
<div class="req-ruangan">
    <div class="teks-ruangan-form" >
        Tolong lengkapi form di bawah ini!
    </div>
    <div class="req-gedung-form-parent">
        <div class="ruangan-form-isi">
            <label for="no-ruangan">Nomor Ruangan</label>
            <input type="text" id="no-ruangan" name="no-ruangan">
        </div>
        <div class="ruangan-form-isi">
            <label for="nama-ruangan">Nama Ruangan</label>
            <input type="text" id="nama-ruangan" name="nama-ruangan">
        </div>
        <div class="ruangan-form-isi">
            <label for="nama-gedung">Nama Gedung</label>
            <select type="text" id="nama-gedung" name="nama-gedung">
                <option value="D6">Pilih Gedung</option>
                <option value="D6">Kelas Belajar</option>
                <option value="D6">Aula</option>
                <option value="D6">Laboratorium Komputer</option>
                <option value="D6">Laboratorium Kimia</option>
            </select>
        </div>
        <div class="ruangan-form-isi">
            <label for="jenis-ruangan">Jenis Ruangan</label>
            <select type="text" id="jenis-ruangan" name="jenis-ruangan">
                <option value="D6">Pilih Jenis Ruangan</option>
                <option value="D6">Kelas Belajar</option>
                <option value="D6">Aula</option>
                <option value="D6">Laboratorium Komputer</option>
                <option value="D6">Laboratorium Kimia</option>
            </select>
        </div>
        <div class="ruangan-form-isi">
            <label for="kapasitas-ruangan">Kapasitas Ruangan</label>
            <input type="number" id="kapasitas-ruangan" name="kapasitas-ruangan">
        </div>
        <div class="buttonsubmit-ruangan">
            
            <div class="button">
                <button class="button-submit">Submit</button>
            </div>
        </div>
    </div>   
</div>
@endsection