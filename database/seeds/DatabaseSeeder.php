<?php

use Illuminate\Database\Seeder;
use Database\Seeds\UsuarioAdministradorSeeder;

class DatabaseSeeder extends Seeder
{
        public function run()
    {
        $this->truncateTablas([
            'users',
            'users_rols'
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call('UsuarioAdministradorSeeder');
    }
    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
