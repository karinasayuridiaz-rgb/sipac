<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::table('roles')->upsert([
            ['code' => 'ADMINISTRATOR', 'name' => 'Administrador', 'description' => 'Administra cuentas, pacientes, psicólogos, citas, asignaciones y bitácora.', 'created_at' => $now, 'updated_at' => $now],
            ['code' => 'ADMINISTRATIVE', 'name' => 'Personal administrativo', 'description' => 'Gestiona pacientes, psicólogos y programación de citas.', 'created_at' => $now, 'updated_at' => $now],
            ['code' => 'PSYCHOLOGIST', 'name' => 'Psicólogo', 'description' => 'Gestiona disponibilidad, confirma citas y registra historial de pacientes asignados.', 'created_at' => $now, 'updated_at' => $now],
            ['code' => 'PATIENT', 'name' => 'Paciente', 'description' => 'Solicita o cancela citas y consulta información propia autorizada.', 'created_at' => $now, 'updated_at' => $now],
            ['code' => 'GUARDIAN', 'name' => 'Tutora', 'description' => 'Opera sobre menores con vínculo vigente.', 'created_at' => $now, 'updated_at' => $now],
        ], ['code'], ['name', 'description', 'updated_at']);
    }
}
