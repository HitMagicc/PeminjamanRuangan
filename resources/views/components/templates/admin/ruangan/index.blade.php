@extends('layout.admin.index')

@section('mainContent')
<div class="teks-req">
    <h5>Ruangan</h5>
    <a href="{{ route('admin.ruangan.create') }}">
        <button class="button-kanan-atas tambah">Tambah</button>
    </a>
    <!--button class="req-bt">Kembali</button-->
</div>
<div class="req-ruangan">
    <table class="gedung-table" id="ruanganTable">
        <thead>
            <tr class="thead-tr-gedung">
                <th class="thead-text">Nomor Ruangan</th>
                <th class="thead-text">Nama Ruangan</th>
                <th class="thead-text">Jenis Ruangan</th>
                <th class="thead-text">Tempat Gedung</th>
                <th class="thead-text">Kapasitas</th>
                <th class="thead-text">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruangan as $r)
                <tr class="tbody-tr-gedung" style="background-color: {{ $loop->iteration % 2 == 0 ? '#BEBEBE' : '#FFFFFF' }}">
                    <td class="tbody-td-gedung">{{ $loop->iteration }}</td>
                    <td class="tbody-td-gedung">{{ $r->nama_ruangan }}</td>
                    <td class="tbody-td-gedung">
                        @if ($r->jenis === 0) 
                        Ruangan Kelas
                        @elseif($r->jenis === 1)
                        Ruangan Aula
                        @else
                        Laboratorium
                        @endif
                    </td>
                    <td class="tbody-td-gedung">{{ $r->gedung->alamat }}</td>
                    <td class="tbody-td-gedung">{{ $r->kapasitas }}</td>
                    <td class="tbody-td-gedung">
                        <a href="{{ route('admin.ruangan.edit', $r->id) }}" class="btn edit-button">Edit</a>
                        <form action="{{ route('admin.ruangan.delete', $r->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('post')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Aryasure about that?')">Hapus</button>
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
