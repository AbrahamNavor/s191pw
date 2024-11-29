<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([
            [
                'nombre' => 'Abraham',
                'apellido' => 'Perez',
                'correo' => 'preznavor3008@gmail.com',
                'telefono' => '4428383638',
            ],
            [
                'nombre' => 'Maria',
                'apellido' => 'Lopez',
                'correo' => 'maria.lopez@example.com',
                'telefono' => '+5551234567',
            ],
            [
                'nombre' => 'Juan',
                'apellido' => 'Martinez',
                'correo' => 'juan.martinez@example.com',
                'telefono' => '3339876543',
            ]
        ]);
    }
}
