@extends('layout.admin.index')

@section('mainContent')
<div class="teks-req">
    <h5>Ruangan</h5>
    <button class="button-kanan-atas tambah">Tambah</button>
    <!--button class="req-bt">Kembali</button-->
</div>
<div class="req-ruangan">
    <table class="gedung-table">
        <thead>
            <tr class="thead-tr-gedung">
                <th class="thead-text">Nomor Gedung</th>
                <th class="thead-text">Jenis Ruangan</th>
                <th class="thead-text">Tempat Gedung</th>
                <th class="thead-text">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr class="tbody-tr-gedung" style="background-color:#BEBEBE">
                <td class="tbody-td-gedung" style="background-color:#BEBEBE">xxxx-xxxx-xxxx</td>
                <td class="tbody-td-gedung">Gedung D6</td>
                <td class="tbody-td-gedung">Dekat Jembatan</td>
                <td class="tbody-td-gedung">
                    <button class="edit-button">Edit</button>
                    <button class="delete-button">Hapus</button>
                </td>
            </tr>
            <tr class="tbody-tr-gedung" >
                <td class="tbody-td-gedung" >xxxx-xxxx-xxxx</td>
                <td class="tbody-td-gedung">Gedung D6</td>
                <td class="tbody-td-gedung">Dekat Jembatan</td>
                <td class="tbody-td-gedung">
                    <button class="edit-button">Edit</button>
                    <button class="delete-button">Hapus</button>
                </td>
            </tr>
            <tr class="tbody-tr-gedung" style="background-color:#BEBEBE">
                <td class="tbody-td-gedung" style="background-color:#BEBEBE">xxxx-xxxx-xxxx</td>
                <td class="tbody-td-gedung">Gedung D6</td>
                <td class="tbody-td-gedung">Dekat Jembatan</td>
                <td class="tbody-td-gedung">
                    <button class="edit-button">Edit</button>
                    <button class="delete-button">Hapus</button>
                </td>
            </tr>
            
            
        </tbody>
    </table>   
</div>
@endsection