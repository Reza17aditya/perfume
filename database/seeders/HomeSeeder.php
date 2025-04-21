<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        Home::create([
            'judul' => 'Selamat Datang di D&R Perfume',
            'deskripsi' => 'D&R Perfume menghadirkan aroma terbaik untuk pria dan wanita. Temukan wangi yang mencerminkan dirimu!',
        ]);
    }
}

