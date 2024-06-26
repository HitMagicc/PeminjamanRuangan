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
        
    @foreach ($history as $p)
    <div class="card-request-parent">
        <a href="{{ route('admin.riwayat.show', $p->id) }}">
            <div class="card-request">
                <div class="bagian-tempat">
                    <div class="nama no-ruang">No: {{ $p->id }}</div>
                    <div class="nama gedung">Gedung: {{ $p->ruangan->gedung->nama_gedung }}</div>
                    <div class="nama fakultas">Nama Ruangan: {{ $p->ruangan->nama_ruangan }}</div>
                </div>
                <div class="bagian-adm">
                    <div class="nama tanggal">{{ $p->tanggal }}</div>
                    <div class="acceptance" style="background-color:
                        @if($p->approval === 1)
                            #6AC026
                        @elseif($p->approval === 0)
                            #E2E632
                        @else
                            #E92323
                        @endif">
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endforeach
    @endif
</div>
@endsection