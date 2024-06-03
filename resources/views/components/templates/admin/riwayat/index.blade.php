@extends('layout.admin.index')
@section('mainContent')
<div class="teks-req">
    <h5>Histori Permintaan</h5>
    <button class="button-kanan-atas kembali">Kembali</button>
</div>
<div class="card-request-parent">
    @if ($history->isEmpty())
        Belum ada history
    @else
        
    @foreach ($history as $item)
    <div class="card-request">
        <div class="riwayat-bagian-tempat">
            <div class="nama no-ruang">{{$item->id}}</div>
            <div class="nama gedung">{{$item->ruangan->gedung->nama_gedung}}</div>
            <div class="nama fakultas">{{$item->ruangan->nama_ruangan}}</div>
        </div>
        <div class="bagian-adm">
            <div class="nama tanggal">{{$item->tanggal}}</div>
            <div class="acceptance" style="background-color: #E2E632"></div>
        </div>
    </div>
    @endforeach
    @endif
</div>
@endsection