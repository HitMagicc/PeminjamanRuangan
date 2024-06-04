<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    protected $table = 'berkas';

    protected $fillable = [
        'id_jurusan',
        'nama',
        'npm',
        'no_telp',
    ];

    public function permintaan()
    {
        return $this->belongsTo(Permintaan::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class,'id_jurusan');
    }
}
