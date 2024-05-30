@extends('layout.admin.index')

@section('mainContent')
<div class="teks-req">
    <h5>Permintaan</h5>
    <button class="button-kanan-atas">Histori</button>
</div>
<div class="card-request-parent">
    <div class="card-request">
        <div class="riwayat-bagian-tempat">
            <div class="nama no-ruang">Nomor Permintaan</div>
            <div class="nama gedung">Gedung</div>
            <div class="nama fakultas">Ruangan</div>
        </div>
        <div class="bagian-adm">
            <div class="nama tanggal">dd/mm/yyyy - dd/mm/yyyy</div>
            <div class="acceptance" style="background-color: #E2E632"></div>
        </div>
    </div>
    <div class="card-request">
        <div class="riwayat-bagian-tempat">
            <div class="nama no-ruang">Nomor Permintaan</div>
            <div class="nama gedung">Gedung</div>
            <div class="nama fakultas">Ruangan</div>
        </div>
        <div class="bagian-adm">
            <div class="nama tanggal">dd/mm/yyyy - dd/mm/yyyy</div>
            <div class="acceptance" style="background-color: #E2E632"></div>
        </div>
    </div>
</div>
@endsection