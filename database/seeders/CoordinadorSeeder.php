<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoordinadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('coordinadores')->insert([
        ['dni' => '12345678A', 'id_centro' => 'CEN001', 'id_ciclo' => 'DAM001'],
    ]);
}

}
