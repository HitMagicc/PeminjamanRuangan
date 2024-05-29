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
    <form action="{{ route('user.update-gedung',$gedung->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="namaGedung">Nama Gedung</label>
            <input type="text" class="form-control" id="namaGedung" name="nama_gedung" value="{{$gedung->nama_gedung}}" required>
        </div>
        <div class="form-group">
            <label for="alamatGedung">Alamat</label>
            <input type="text" class="form-control" id="alamatGedung" name="alamat" value="{{$gedung->alamat}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
