@extends('layout.admin.index')

@section('mainContent')
<div class="teks-req">
    <h5>Gedung</h5>
    <form action="{{route('admin.gedung.create')}}" method="get">
        <button class="button-kanan-atas tambah">Tambah Gedung</button>
    </form>
</div>
<div class="req-ruangan">
    <table class="gedung-table" id="ruanganTable">
        <thead>
            <tr class="thead-tr-gedung">
                <th class="thead-text">Nomor Gedung</th>
                <th class="thead-text">Nama Gedung</th>
                <th class="thead-text">Alamat Gedung</th>
                <th class="thead-text">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gedung as $g)
                <tr class="tbody-tr-gedung" style="background-color: {{ $loop->iteration % 2 == 0 ? '#BEBEBE' : '#FFFFFF' }}">
                    <td class="tbody-td-gedung" >{{$loop->iteration}}</td>
                    <td class="tbody-td-gedung">{{$g->nama_gedung}}</td>
                    <td class="tbody-td-gedung">{{$g->alamat}}</td>
                    <td class="tbody-td-gedung">
                        <a href="{{ route('admin.gedung.edit', $g->id) }}" class="btn edit-button">Edit</a>
                        <form action="{{ route('admin.gedung.delete', $g->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('post')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>   
</div>
<script>
    $(document).ready(function() {
        $('#ruanganTable').DataTable();
    });
</script>
@endsection