@extends('layout.admin.index')

@section('mainContent')
<div class="teks-req">
    <h5>Edit Gedung</h5>
    <button class="button-kanan-atas kembali">Kembali</button>
    <!--button class="req-bt">Kembali</button-->
</div>
<div class="req-ruangan">
    <div class="teks-ruangan-form" >
        Lengkapi form edit gedung xxxxxxx di bawah ini!
    </div>
    <div class="req-gedung-form-parent">
        <div class="gedung-form-isi">
            <label for="no-gedung">Nomor Gedung</label>
            <input type="text" id="no-gedung" name="no-gedung" value="asdasdas" disabled>
        </div>
        <div class="gedung-form-isi">
            <label for="nama-gedung">Nama Gedung</label>
            <input type="text" id="nama-gedung" name="nama-gedung">
        </div>
        <div class="gedung-form-isi">
            <label for="alamat-gedung">Alamat Gedung</label>
            <input type="text" id="alamat-gedung" name="alamat-gedung">
        </div>
        <div class="gedung-form-button">
            <button class="button-submit" >Submit</button>
        </div>
    </div>   
</div>
@endsection