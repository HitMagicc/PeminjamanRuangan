<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Gedung\GedungSeeder;
use Database\Seeders\Jurusan\JurusanSeeder;
use Database\Seeders\Ruangan\RuanganSeeder;
use Database\Seeders\User\UserSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            GedungSeeder::class,
            JurusanSeeder::class,
            RuanganSeeder::class
        ]);
    }
}
