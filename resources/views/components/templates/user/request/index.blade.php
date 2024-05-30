@extends('layout.user.index')

@section('mainContent')
<div class="teks-req">
    <h5>Request Ruangan</h5>
    <a href="{{route('request.create')}}"><button class="req-bt">Request</button></a>
</div>
<div class="card-request-parent">
    <a href="">
        <div class="card-request">
            <div class="bagian-tempat">
                <div class="nama no-ruang">No Ruangan</div>
                <div class="nama gedung">Gedung</div>
                <div class="nama fakultas">Fakultas</div>
            </div>
            <div class="bagian-adm">
                <div class="nama tanggal">dd/mm/yyyy - dd/mm/yyyy</div>
                <div class="acceptance" style="background-color: green"></div>
            </div>
        </div>
    </a>
</div>
@endsection