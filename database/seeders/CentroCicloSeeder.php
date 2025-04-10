<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CentroCicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('centro_ciclo')->insert([
        ['id_centro' => 'CEN001', 'id_ciclo' => 'DAM001'],
        ['id_centro' => 'CEN002', 'id_ciclo' => 'ASIR01'],
    ]);
}

}
