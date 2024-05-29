@extends('layout.user.index')

@section('mainContent')
<div class="teks-req">
    <h5>Riwayat Pemasanan Ruangan</h5>
</div>
<div class="card-request-parent">
    <div class="card-request">
        <div class="riwayat-bagian-tempat">
            <div class="nama no">No</div>
            <div class="nama no-ruang">No Ruangan</div>
            <div class="nama gedung">Gedung</div>
            <div class="nama fakultas">Fakultas</div>
        </div>
        <div class="bagian-adm">
            <div class="nama tanggal">dd/mm/yyyy - dd/mm/yyyy</div>
            <div class="acceptance" style="background-color: green"></div>
        </div>
    </div>
</div>
@endsection