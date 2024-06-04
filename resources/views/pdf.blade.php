<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        .header{
            font-weight: bold; 
            text-align: center;
        }
    
        .slogan{
            font-style: italic; 
            text-align: center; 
        }
    
        .paragraph{
            font-family: "Amiri", serif;
            line-height: 0.7cm;
        }

        .amiri-regular {
            font-family: "Amiri", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
    
    
</head>
<body>
    <h2 class="header" >Peminjaman Ruangan FMIPA</h2>
    <hr>
    {{-- @dd($ruangan) --}}
    <h1 class="title">{{$permintaan->ruangan->id}} | {{$permintaan->ruangan->gedung->nama_gedung}}</h1>
    <p class="paragraph ">
        <div class="teks-detail tanggal-detail">Tanggal: {{$permintaan->tanggal}}</div>
        <div class="teks-detail nama-detail">Nama Pemesan: {{$permintaan->berkas->nama}}</div>
        <div class="teks-detail npm-detail">NPM: {{$permintaan->berkas->npm}}</div>
        <div class="teks-detail fakjur-detail">Jurusan: {{$permintaan->berkas->jurusan}}</div>
        <div class="teks-detail kegunaan-detail">Peruntukkan: {{$permintaan->peruntukan}}</div>
        <div class="teks-detail jumlah-detail">Kapasitas: {{$permintaan->ruangan->kapasitas}}</div>
        <div class="teks-detail approve-detail">Status: 
            @if ($permintaan->approval===0)
                Pending
            @elseif($permintaan->approval===1)
                Diterima
            @else
                Ditolak
            @endif
        </div>
        <div class="teks-detail alasan-detail">Alasan: {{$permintaan->alasan}}</div>
    </p>    
</body>
</html>