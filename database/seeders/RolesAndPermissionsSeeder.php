<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Crear permisos
        Permission::create(['name' => 'ver pedidos']);
        Permission::create(['name' => 'crear pedidos']);
        Permission::create(['name' => 'editar pedidos']);
        Permission::create(['name' => 'eliminar pedidos']);
        
        Permission::create(['name' => 'ver envios']);
        Permission::create(['name' => 'crear envios']);
        Permission::create(['name' => 'editar envios']);
        Permission::create(['name' => 'eliminar envios']);

        // Crear roles y asignar permisos
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(Permission::all());

        $operador = Role::create(['name' => 'operador']);
        $operador->givePermissionTo(['ver pedidos', 'crear pedidos', 'editar pedidos', 'ver envios', 'crear envios', 'editar envios']);

        $cliente = Role::create(['name' => 'cliente']);
        $cliente->givePermissionTo(['ver pedidos']);
    }
}
