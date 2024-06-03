<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name'=>'hai',
                'username'=>'member',
                'password'=>Hash::make('member'),
                'level'=>0,
                'created_at' => now(), 
                'updated_at' => now(), 
            ],
            [
                'name'=>'hai',
                'username'=>'admin',
                'password'=>Hash::make('admin'),
                'level'=>1,
                'created_at' => now(), 
                'updated_at' => now(), 
            ],
        ]);
    }
}
