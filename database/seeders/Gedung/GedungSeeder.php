<?php

namespace Database\Seeders\Gedung;

use App\Models\Gedung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GedungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gedung::insert([
            [
                'nama_gedung'=>'PPBS A',
                'alamat'=>'Deket Alfa X',
            ],
            [
                'nama_gedung'=>'PPBS B',
                'alamat'=>'Deket Alfa X',
            ],
            [
                'nama_gedung'=>'PPBS C',
                'alamat'=>'Deket Alfa X',
            ],
            [
                'nama_gedung'=>'PPBS D',
                'alamat'=>'Deket Alfa X',
            ],
        ]);
    }
}
