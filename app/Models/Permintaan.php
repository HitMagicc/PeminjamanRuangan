<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    protected $table = 'permintaan';

    protected $fillable = [
        'id_ruangan',
        'id_user',
        'id_berkas',
        'approval',
        'peruntukan',
        'alasan',
        'tanggal',
    ];
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class,'id_ruangan','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }public function berkas()
    {
        return $this->belongsTo(Berkas::class,'id_berkas','id');
    }
}
