@extends('layout.admin.index')
@section('mainContent')

@extends('layout.admin.index')
@section('mainContent')
<div class="teks-req">
    <h5>Edit Ruangan</h5>
    <button class="button-kanan-atas kembali">Kembali</button>
    <!--button class="req-bt">Kembali</button-->
</div>
<div class="req-ruangan">
    <div class="teks-ruangan-form" >
        Lengkapi form edit ruangan di bawah ini!
    </div>
    <form action="" method="post">
    <div class="req-gedung-form-parent">
        <div class="ruangan-form-isi">
            <label for="no-ruangan">Nomor Ruangan</label>
            <input type="text" id="no-ruangan" name="no-ruangan" value="{{$ruangan->id}}"disabled>
        </div>
        <div class="ruangan-form-isi">
            <label for="nama-ruangan">Nama Ruangan</label>
            <input type="text" id="nama-ruangan" name="nama_ruangan" value="{{$ruangan->nama_ruangan}}">
        </div>
        <div class="ruangan-form-isi">
            <label for="nama-gedung">Nama Gedung</label>
            <select type="text" id="nama-gedung" name="nama-gedung">
                <option value="D6" selected disabled>Pilih Gedung</option>
                <option value=0>Kelas Belajar</option>
                <option value=1>Aula</option>
                <option value=2>Laboratorium Komputer</option>
                <option value=3>Laboratorium Kimia</option>
            </select>
        </div>
        <div class="ruangan-form-isi">
            <label for="jenis-ruangan">Jenis Ruangan</label>
            <select type="text" id="jenis-ruangan" name="jenis-ruangan">
                <option value=0>Pilih Jenis Ruangan</option>
                <option value=1>Kelas Belajar</option>
                <option value=2>Aula</option>
                <option value=3>Laboratorium Komputer</option>
                <option value=4>Laboratorium Kimia</option>
            </select>
        </div>
        <div class="ruangan-form-isi">
            <label for="kapasitas-ruangan">Kapasitas Ruangan</label>
            <input type="number" id="kapasitas-ruangan" name="kapasitas_ruangan">
        </div>
        <div class="buttonsubmit-ruangan">
            
            <div class="button">
                <button class="button-submit">Selesai</button>
            </div>
        </div>
    </form>
    </div>   
</div>
@endsection

@endsection