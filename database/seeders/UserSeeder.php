<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luis Carlos',
            'email' => 'santillan.itc@gamil.com',
            'password' => bcrypt('carlos123')
        ])->assignRole('admin');

        User::create([
            'name' => 'Francisco',
            'email' => 'Francisco@gamil.com',
            'password' => bcrypt('francisco123')
        ])->assignRole('alumno');
    }

    
        
    
}
