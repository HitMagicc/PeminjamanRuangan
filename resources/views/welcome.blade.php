<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <a href="{{ route('user.create-gedung') }}" class="btn btn-primary mb-3">Tambah Gedung</a>
        <table class="table table-warning">
            <thead>
                <tr>
                    <th>Nama Gedung</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gedung as $g)
                <tr>
                    <td>{{ $g->nama_gedung }}</td>
                    <td>{{ $g->alamat }}</td>
                    <td>
                        <a href="{{ route('user.edit-gedung', $g->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('user.delete-gedung', $g->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('post')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
