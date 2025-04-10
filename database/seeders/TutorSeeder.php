<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('tutores')->insert([
        ['dni' => '87654321B', 'id_centro' => 'CEN002', 'id_ciclo' => 'ASIR01'],
    ]);
}

}
