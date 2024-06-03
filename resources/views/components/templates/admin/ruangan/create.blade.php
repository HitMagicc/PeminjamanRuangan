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
    <form action="{{route('admin.ruangan.store')}}" method="post">
        @csrf
    <div class="req-gedung-form-parent">
        <div class="ruangan-form-isi">
            <label for="no-ruangan">Nomor Ruangan</label>
            <input type="text" id="no-ruangan" name="no_ruangan">
        </div>
        <div class="ruangan-form-isi">
            <label for="nama-gedung">Nama Gedung</label>
            <select type="text" id="nama-gedung" name="nama_gedung">
                <option value="D6">Pilih Gedung</option>
                @foreach ($gedung as $item)
                <option value="{{$item->id}}">{{$item->nama_gedung}}</option>
                @endforeach
            </select>
        </div>
        <div class="ruangan-form-isi">
            <label for="nama-ruangan">Nama Ruangan</label>
            <input type="text" id="nama-ruangan" name="nama_ruangan">
        </div>
        <div class="ruangan-form-isi">
            <label for="jenis-ruangan">Jenis Ruangan</label>
            <select type="text" id="jenis-ruangan" name="jenis_ruangan">
                <option value="D6">Pilih Jenis Ruangan</option>
                <option value=0>Kelas Belajar</option>
                <option value=1>Aula</option>
                <option value=2>Laboratorium Komputer</option>
                <option value=3>Laboratorium Kimia</option>
            </select>
        </div>
        <div class="ruangan-form-isi">
            <label for="kapasitas-ruangan">Kapasitas Ruangan</label>
            <input type="number" id="kapasitas-ruangan" name="kapasitas_ruangan" value="">
        </div>
        <div class="buttonsubmit-ruangan">
            
            <div class="button">
                <button type="submit" class="button-submit">Submit</button>
            </div>
        </div>
    </div>   
    </form>
</div>
@endsection