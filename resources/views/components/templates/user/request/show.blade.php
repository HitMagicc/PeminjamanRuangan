@extends('layout.user.index')

@section('mainContent')
<div class="main-interface">
    <div class="teks-req">
        <h5>Detail Pemesanan</h5>
    </div>
    <div class="kotak-atas">
        <div class="kotak-satu">
            <div class="show-text ruang">No ruangan</div>
            <div class="show-text building">Gedung</div>
        </div>
        <div class="garis"></div>
        <div class="kotak-dua">
            <div class="show-text fakultas">Nomor Peminjaman</div>
        </div>
    </div>
    <div class="tulisan-detail">
        <div class="teks-detail tanggal-detail">dd/mm/yyyy - dd/mm/yyyy</div>
        <div class="teks-detail nama-detail">nama</div>
        <div class="teks-detail npm-detail">npm</div>
        <div class="teks-detail fakjur-detail">jurusan</div>
        <div class="teks-detail kegunaan-detail">kegunaan</div>
        <div class="teks-detail jumlah-detail">jumlah</div>
        <div class="teks-detail approve-detail">approve</div>
        <div class="teks-detail alasan-detail">alasan</div>
    </div>
</div>
@endsection