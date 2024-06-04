@extends('layout.admin.index')

@section('mainContent')
<div class="teks-req">
    <h5>Edit Gedung</h5>
    <button class="button-kanan-atas kembali">Kembali</button>
    <!--button class="req-bt">Kembali</button-->
</div>
<div class="req-ruangan">
    <div class="teks-ruangan-form" >
        Lengkapi form edit gedung {{$gedung->nama_gedung}} di bawah ini!
    </div>
    <form action="{{route('admin.gedung.update',$gedung->id)}}" method="post">
        @csrf
        <div class="req-gedung-form-parent">
            <div class="gedung-form-isi">
                <label for="no-gedung">Nomor Gedung</label>
                <input type="text" id="no-gedung" name="no-gedung" value="{{$gedung->id}}" readonly>
            </div>
            <div class="gedung-form-isi">
                <label for="nama-gedung">Nama Gedung</label>
                <input type="text" id="nama-gedung" name="nama_gedung" value="{{$gedung->nama_gedung}}">
            </div>
            <div class="gedung-form-isi">
                <label for="alamat-gedung">Alamat Gedung</label>
                <input type="text" id="alamat-gedung" name="alamat_gedung" value="{{$gedung->alamat}}">
            </div>
            <div class="gedung-form-button">
                <button class="button-submit" type="submit">Submit</button>
            </div>
        </form>
    </div>   
</div>
@endsection