@extends('layout.admin.index')
@section('mainContent')

<div class="main-interface">
    <div class="teks-req">
        <h5>Detail Pemesanan</h5>
        <button class="button-kanan-atas kembali">Kembali</button>
    </div>
    <div class="kotak-atas">
        <div class="kotak-satu">
            <div class="show-text ruang">Ruangan: {{$p->id_ruangan}}</div>
            <div class="show-text building">Gedung: {{$p->ruangan->gedung->nama_gedung}}</div>
        </div>
        <div class="garis"></div>
        <div class="kotak-dua">
            <div class="show-text fakultas">Nomor Peminjaman: {{$p->id}}</div>
        </div>
    </div>
    <div class="tulisan-detail">
        <div class="teks-detail tanggal-detail">Tanggal: {{$p->tanggal}}</div>
        <div class="teks-detail nama-detail">Nama Pemesan: {{$p->berkas->nama}}</div>
        <div class="teks-detail npm-detail">NPM: {{$p->berkas->npm}}</div>
        <div class="teks-detail fakjur-detail">Jurusan: {{$p->berkas->jurusan->nama_jurusan}}</div>
        <div class="teks-detail kegunaan-detail">Peruntukkan: {{$p->peruntukan}}</div>
        <div class="teks-detail jumlah-detail">Kapasitas: {{$p->ruangan->kapasitas}}</div>
        <div class="teks-detail approve-detail">Status: 
            @if ($p->approval===0)
                Pending
            @elseif($p->approval===1)
                Diterima
            @else
                Ditolak
            @endif
        </div>
        <div class="teks-detail alasan-detail">Alasan: {{$p->alasan}}</div>
    </div>
</div>

@endsection