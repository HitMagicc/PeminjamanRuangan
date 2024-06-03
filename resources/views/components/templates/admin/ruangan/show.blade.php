@extends('layout.admin.index')
@section('mainContent')
<div class="teks-req">
    <h5>Detail Ruangan</h5>
    <button class="button-kanan-atas kembali">Kembali</button>
    <!--button class="req-bt">Kembali</button-->
</div>
<div class="req-ruangan">
    <div class="teks-ruangan-form" >
        Detail Ruangan xxxxxxxxxxx
    </div>
    <div class="req-gedung-form-parent">
        <div class="ruangan-form-isi">
            <label for="no-ruangan">Nomor Ruangan</label>
            <div class="ruangan-form-isi-field">{{$ruangan->id}}</div>
        </div>
        <div class="ruangan-form-isi">
            <label for="nama-ruangan">Nama Ruangan</label>
            <div class="ruangan-form-isi-field">{{$ruangan->nama_ruangan}}</div>
        </div>
        <div class="ruangan-form-isi">
            <label for="nama-gedung">Nama Gedung</label>
            <div class="ruangan-form-isi-field">{{$ruangan->gedung->nama_gedung}}</div>
        </div>
        <div class="ruangan-form-isi">
            <label for="jenis-ruangan">Jenis Ruangan</label>
            <div class="ruangan-form-isi-field">
                @if ($ruangan->jenis === 0)
                    Kelas Belajar
                @elseif($ruangan->jenis === 1)
                    Aula
                @elseif($ruangan->jenis === 2)
                    Lab Komputer
                @elseif($ruangan->jenis === 3)
                    Lab Kimia
                @endif
            </div>
        </div>
        <div class="ruangan-form-isi" style="padding-bottom: 65px;">
            <label for="kapasitas-ruangan">Kapasitas Ruangan</label>
            <div class="ruangan-form-isi-field">{{$ruangan->kapasitas}}</div>
        </div>
    </div>   
</div>

@endsection