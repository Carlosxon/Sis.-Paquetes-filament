<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        $operador = User::create([
            'name' => 'Operador User',
            'email' => 'operador@example.com',
            'password' => bcrypt('password'),
        ]);
        $operador->assignRole('operador');

        $cliente = User::create([
            'name' => 'Cliente User',
            'email' => 'cliente@example.com',
            'password' => bcrypt('password'),
        ]);
        $cliente->assignRole('cliente');
    }
    
}
