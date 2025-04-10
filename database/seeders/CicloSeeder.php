<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('ciclos')->insert([
        ['id_ciclo' => 'DAM001', 'nombre' => 'Desarrollo de Aplicaciones Multiplataforma'],
        ['id_ciclo' => 'ASIR01', 'nombre' => 'Administración de Sistemas Informáticos'],
    ]);
}

}
