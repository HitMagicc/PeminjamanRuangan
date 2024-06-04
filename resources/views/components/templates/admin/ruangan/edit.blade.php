@extends('layout.admin.index')
@section('mainContent')

<div class="teks-req">
    <h5>Edit Ruangan</h5>
    <button class="button-kanan-atas kembali">Kembali</button>
    <!--button class="req-bt">Kembali</button-->
</div>
<div class="req-ruangan">
    <div class="teks-ruangan-form" >
        Lengkapi form edit ruangan di bawah ini!
    </div>
    <form action="{{route('admin.ruangan.update',$ruangan->id)}}" method="post">
        @csrf
    <div class="req-gedung-form-parent">
        <div class="ruangan-form-isi">
            <label for="no-ruangan">Nomor Ruangan</label>
            <input type="text" id="no-ruangan" name="no_ruangan" value="{{$ruangan->id}}" readonly>
        </div>
        <div class="ruangan-form-isi">
            <label for="nama-ruangan">Nama Ruangan</label>
            <input type="text" id="nama-ruangan" name="nama_ruangan" value="{{$ruangan->nama_ruangan}}">
        </div>
        <div class="ruangan-form-isi">
            <label for="nama-gedung">Nama Gedung</label>
            <select type="text" id="nama-gedung" name="id_gedung">
                <option value="D6" selected disabled>Pilih Gedung</option>
                @foreach ($gedung as $item)
                <option value="{{$item->id}}">{{$item->nama_gedung}}</option>
                @endforeach
            </select>
        </div>
        <div class="ruangan-form-isi">
            <label for="jenis-ruangan">Jenis Ruangan</label>
            <select type="text" id="jenis-ruangan" name="jenis_ruangan">
                <option value=0>Pilih Jenis Ruangan</option>
                <option value=1>Kelas Belajar</option>
                <option value=2>Aula</option>
                <option value=3>Laboratorium Komputer</option>
                <option value=4>Laboratorium Kimia</option>
            </select>
        </div>
        <div class="ruangan-form-isi">
            <label for="kapasitas-ruangan">Kapasitas Ruangan</label>
            <input type="number" id="kapasitas-ruangan" name="kapasitas_ruangan" value="{{$ruangan->kapasitas}}">
        </div>
        <div class="buttonsubmit-ruangan">
            
            <div class="button">
                <button class="button-submit" type="submit">Selesai</button>
            </div>
        </div>
    </form>
    </div>   
</div>

@endsection