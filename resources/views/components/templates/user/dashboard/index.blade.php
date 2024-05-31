@extends('layout.user.index')

@section('mainContent')
<div class="main-interface">
    <div class="">
        <h2>Hai, {{$user->username}}!</h2>
    </div>
    <div class="full-square-with-lines">
        <div class="square-a">
            @if ($permintaan === NULL)
            Belum ada permintaan
            @else
            @foreach ($permintaan as $p)
            <a href="{{route('request.show',$p->id)}}">
            <div class="elemenkotak">
                    <div class="elemenkotak2">
                        Nomor Ruangan: {{$p->id_ruangan}}<br>Status: 
                        @if ($p->approval === 0)
                        Pending
                    @endif
                </div>
                <div class="elemenkotak2">
                    {{$p->tanggal}}
                </div>
            </div>
        </a>
            @endforeach
            @endif
            <div class="seemore">
                <a href="{{route('request.index')}}">
                    See More ->
                </a>
            </div>
        </div>
        
        <div class="line-center">

        </div>
        <div class="square-b">
            @if ($history->isEmpty())
                Belum ada riwayat pemesanan
            @else
            @foreach ($history as $h)
            <div class="elemenkotak">
                <div class="elemenkotak2">
                    {{$h->id_ruangan}}<br>Status: 
                    @if ($h->approval === 1)
                        Diterima
                    @else
                        Ditolak
                    @endif
                </div>
                <div class="elemenkotak2">
                    {{$h->tanggal}}
                </div>
            </div>
            @endforeach
            @endif
            <div class="seemore">
                <a href="{{route('riwayat.index')}}">
                    See More ->
                </a>
            </div>  
        </div>
    </div>
</div>
@endsection