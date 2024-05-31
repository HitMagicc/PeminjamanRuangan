@extends('layout.user.index')

@section('mainContent')
<div class="main-interface">
    <div class="teks-req">
        <h5>Detail Pemesanan</h5>
    </div>
    <div class="kotak-atas">
        <div class="kotak-satu">
            <div class="show-text ruang">Ruangan: {{$permintaan->id_ruangan}}</div>
            <div class="show-text building">Gedung: {{$permintaan->ruangan->gedung->nama_gedung}}</div>
        </div>
        <div class="garis"></div>
        <div class="kotak-dua">
            <div class="show-text fakultas">{{$permintaan->id}}</div>
        </div>
    </div>
    <div class="tulisan-detail">
        <div class="teks-detail tanggal-detail">Tanggal: {{$permintaan->tanggal}}</div>
        <div class="teks-detail nama-detail">Nama Pemesan: {{$permintaan->user->name}}</div>
        <div class="teks-detail npm-detail">NPM: {{$permintaan->berkas->npm}}</div>
        <div class="teks-detail fakjur-detail">Jurusan: Teknik Informatika</div>
        <div class="teks-detail kegunaan-detail">Peruntukkan: {{$permintaan->peruntukan}}</div>
        <div class="teks-detail jumlah-detail">Kapasitas: {{$permintaan->ruangan->kapasitas}}</div>
        <div class="teks-detail approve-detail">Status: 
            @if ($permintaan->approval===0)
                Pending
            @elseif($permintaan->approval===1)
                Diterima
            @else
                Ditolak
            @endif
        </div>
        <div class="teks-detail alasan-detail">alasan</div>
    </div>
</div>
@endsection