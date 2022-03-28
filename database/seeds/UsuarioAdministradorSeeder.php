<?php

use Illuminate\Database\Seeder;

class UsuarioAdministradorSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('pass123'),
            'rut' => '1111111-1'
        ]);
        DB::table('rols')->insert([
        	'id' => 1,
        	'nombre' => 'Administrador'
        ]);
        DB::table('users_rols')->insert([
            'rol_id' => 1,
            'usuario_id' => 2,
        ]);
    }
}
	