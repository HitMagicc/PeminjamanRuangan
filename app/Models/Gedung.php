<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;
    protected $table = 'gedung';
    protected $fillable = [
        'nama_gedung',
        'alamat',
    ];
    public function ruangan()
    {
        return $this->hasMany(Ruangan::class);
    }
    public function jurusan()
    {
        return $this->hasMany(Jurusan::class);
    }

}
