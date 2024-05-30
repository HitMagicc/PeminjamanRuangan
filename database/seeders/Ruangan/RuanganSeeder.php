<?php

namespace Database\Seeders\Ruangan;

use App\Models\Ruangan;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuanganSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Factory::create();
        for ($i=0; $i < 4; $i++) {
            Ruangan::insert([
                [
                    'id_gedung'=>1,
                    'nama_ruangan'=>$faker->name,
                    'jenis'=>'2',
                    'kapasitas'=>$faker->numberBetween(50,1000),
                ],
                [
                    'id_gedung'=>2,
                    'nama_ruangan'=>$faker->name,
                    'jenis'=>'1',
                    'kapasitas'=>$faker->numberBetween(50,1000),
                ],
                [
                    'id_gedung'=>3,
                    'nama_ruangan'=>$faker->name,
                    'jenis'=>'0',
                    'kapasitas'=>$faker->numberBetween(50,1000),
                ],
                [
                    'id_gedung'=>4,
                    'nama_ruangan'=>$faker->name,
                    'jenis'=>'2',
                    'kapasitas'=>$faker->numberBetween(50,1000),
                ],
            ]);
        }
    }
}
