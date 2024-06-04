@extends('layout.user.index')

@section('mainContent')
<div class="main-interface">
    <div class="teks-req">
        <h5>Detail Pemesanan</h5>
        <button class="button-kanan-atas kembali" onclick="window.history.back()">Kembali</button>
    </div>
    <div class="kotak-atas">
        <div class="kotak-satu">
            <div class="show-text ruang">Ruangan: {{$permintaan->id_ruangan}}</div>
            <div class="show-text building">Gedung: {{$permintaan->ruangan->gedung->nama_gedung}}</div>
        </div>
        <div class="garis"></div>
        <div class="kotak-dua">
            <div class="show-text fakultas">{{$permintaan->id}}</div>
            @if ($permintaan->approval === 1)
                
            <a href="{{route('request.download',$permintaan->id)}}" style="color: inherit;text-decoration: none">
                <div class="show-text fakultas"><button class="download-button">Download Dokumen</button></div>
            </a>
            @else
                
            @endif
        </div>
    </div>
    <div class="tulisan-detail">
        <div class="teks-detail tanggal-detail">Tanggal: {{$permintaan->tanggal}}</div>
        <div class="teks-detail nama-detail">Nama Pemesan: {{$permintaan->berkas->nama}}</div>
        <div class="teks-detail npm-detail">NPM: {{$permintaan->berkas->npm}}</div>
        <div class="teks-detail fakjur-detail">Jurusan: {{$permintaan->berkas->jurusan->nama_jurusan}}</div>
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
        <div class="teks-detail alasan-detail">Alasan: {{$permintaan->alasan}}</div>
    </div>
</div>
@endsection