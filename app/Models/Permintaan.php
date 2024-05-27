<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    protected $table = 'permintaan';

    protected $fillable = [
        'level',
    ];
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }public function berkas()
    {
        return $this->belongsTo(Berkas::class);
    }
}
