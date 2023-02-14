<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Alumno;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            'nombre'    => 'Juan Perez',
            'edad'      => 18,
            'grupo'     => '6AVP',
            'sexo'      => true,
        ]);

        Alumno::create([
            'nombre'    => 'Paul Martinez',
            'edad'      => 17,
            'grupo'     => '6AVP',
            'sexo'      => true
        ]);

        Alumno::create([
            'nombre'    => 'Manuel Jimenez',
            'edad'      => 19,
            'grupo'     => '6AVP',
            'sexo'      => true,
        ]);

        Alumno::create([
            'nombre'    => 'Silvia Montaño',
            'edad'      => 17,
            'grupo'     => '6AVP',
            'sexo'      => false,
        ]);

        Alumno::create([
            'nombre'    => 'Pedro Dominguez',
            'edad'      => 17,
            'grupo'     => '6AVP',
            'sexo'      => true,
        ]);

        User::create([
            'name'  => 'Luis Carlos',
            'email' => 'santillan.itc@gmail.com',
            'password' => bcrypt('carlos123')
        ]);
    }
}
