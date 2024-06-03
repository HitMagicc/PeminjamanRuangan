<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan';

    protected $fillable = [
        'nama_jurusan',
        'nama_kaprodi',
    ];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class);
    }

    public function berkas()
    {
        return $this->hasMany(Berkas::class,'id_jurusan');
    }
}
