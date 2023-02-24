<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AlumnoSeeder;
use Database\Seeders\NoticiaSeeder;
use Database\Seeders\MateriaSeeder;
use Database\Seeders\DocenteSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AlumnoSeeder::class);
        $this->call(NoticiaSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(DocenteSeeder::class);
    }
}
