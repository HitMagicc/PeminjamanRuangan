<?php

namespace Database\Seeders\Jurusan;

use App\Models\Jurusan;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $jurusan=["Teknik Informatika","Teknik Elektro","Statistika","Aktuaria"];
        for ($i=0; $i < 4; $i++) {
            Jurusan::insert([
                [
                    'id_gedung'=>1,
                    'nama_jurusan'=>$jurusan[$i],
                    'nama_kaprodi'=>$faker->name,
                ],
            ]);
        }
    }
}
