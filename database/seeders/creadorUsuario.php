<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class creadorUsuario extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrador = User::create([
            'name' => 'Super usuario',
            'username' => 'superuser',
            'email' => 'mail@mail.com',
            'password' => Hash::make('password')
        ]);
        $administrador->save();
    }
}
