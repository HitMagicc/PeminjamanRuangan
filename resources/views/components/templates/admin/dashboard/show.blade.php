@extends('layout.admin.index')

@section('mainContent')
<div class="teks-req">
    <h5>Detail Permintaan</h5>
    <button class="button-kanan-atas" onclick="window.history.back()">Kembali</button>
    <!--button class="req-bt">Kembali</button-->
</div>
<div class="req-ruangan">
    <div class="teks-ruangan-form" >
        Detail Permintaan
    </div>
    <div class="req-ruangan-form-parent">
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="no-permintaan">Nomor Permintaan</label>
                <div class="form-kelompok-isi-details">
                    {{$p->id}}
                </div>
            </div>
            <div class="form-kelompok-isi">
                <label for="ruangan">Nama Pengaju</label>
                <div class="form-kelompok-isi-details">
                    {{$p->berkas->nama}}
                </div>
            </div>
         </div>
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="tanggal">Gedung</label>
                <div class="form-kelompok-isi-details">
                    {{$p->ruangan->gedung->nama_gedung}}
                </div>
            </div>
            <div class="form-kelompok-isi">
                <label for="peruntukan">NPM Pengaju</label>
                <div class="form-kelompok-isi-details">
                    {{$p->berkas->npm}}
                </div>
            </div>
         </div>
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="npm">Ruangan</label>
                <div class="form-kelompok-isi-details">
                    {{$p->ruangan->nama_ruangan}}
                </div>
            </div>
            <div class="form-kelompok-isi">
                <label for="nama">Fakultas-Jurusan</label>
                <div class="form-kelompok-isi-details">
                    {{$p->berkas->jurusan->nama_jurusan}}
                </div>
            </div>
         </div>
        <div class="form-kelompok">
            <div class="form-kelompok-isi">
                <label for="jumlah">Jumlah Peserta</label>
                <div class="form-kelompok-isi-details">
                    {{$p->ruangan->kapasitas}}
                </div>
            </div>
            <div class="form-kelompok-isi">
                <label for="jurusan">Peruntukan</label>
                <div class="form-kelompok-isi-details">
                    {{$p->peruntukan}}
                </div>
            </div>
        </div>
        <div class="form-kelompok">
            <div class="button-container">
                <div class="button-padding">
                    <button class="button tolak">Tolak</button>
                </div>
                <div class="button-padding" style="margin-right: 15x;">
                    <button class="button terima">Terima</button>
                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection