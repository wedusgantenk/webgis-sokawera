<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Rayhan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'	=> 'Rayhan',
            'email'	=> 'rayhan@sokawera.com',
            'password'	=> bcrypt('password')
    ]);
        //
    }
}
