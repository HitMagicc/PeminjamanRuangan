<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangan';
    protected $fillable = [
        'id_gedung',
        'nama_ruangan',
        'jenis',
        'kapasitas',
    ];

    public function gedung()
    {
        return $this->belongsTo(Gedung::class,'id_gedung','id');
    }
}
