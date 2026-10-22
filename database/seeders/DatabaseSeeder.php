<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        $curp = env('SIPAC_SEED_ADMIN_CURP');
        $password = env('SIPAC_SEED_ADMIN_PASSWORD');

        if (! $curp || ! $password) {
            $this->command?->warn('No se creó un administrador. Define SIPAC_SEED_ADMIN_CURP y SIPAC_SEED_ADMIN_PASSWORD solo para el entorno local.');
            return;
        }

        DB::transaction(function () use ($curp, $password): void {
            $person = Person::query()->firstOrCreate(
                ['curp' => mb_strtoupper($curp)],
                ['first_name' => env('SIPAC_SEED_ADMIN_FIRST_NAME', 'Administrador'), 'last_name' => env('SIPAC_SEED_ADMIN_LAST_NAME', 'SIPAC')]
            );
            $role = Role::query()->where('code', 'ADMINISTRATOR')->firstOrFail();

            User::query()->updateOrCreate(
                ['person_id' => $person->id],
                [
                    'role_id' => $role->id,
                    'email' => env('SIPAC_SEED_ADMIN_EMAIL', 'admin@sipac.local'),
                    'password' => Hash::make($password),
                    'must_change_password' => true,
                    'status' => User::STATUS_ACTIVE,
                ]
            );
        });
    }
}
