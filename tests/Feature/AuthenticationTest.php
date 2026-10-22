<?php

namespace Tests\Feature;

use App\Models\Person;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_log_in_with_curp_and_is_forced_to_change_temporary_password(): void
    {
        $user = $this->createUser('ADMINISTRATOR', true);

        $response = $this->post(route('login.store'), [
            'curp' => $user->person->curp,
            'password' => 'Temporal12345',
        ]);

        $response->assertRedirect(route('password.change'));
        $this->assertAuthenticatedAs($user);
    }

    public function test_invalid_password_is_rejected(): void
    {
        $user = $this->createUser('PATIENT', false);

        $this->post(route('login.store'), [
            'curp' => $user->person->curp,
            'password' => 'Incorrecta123',
        ])->assertSessionHasErrors('curp');

        $this->assertGuest();
    }

    public function test_guest_cannot_open_protected_pages(): void
    {
        $this->get(route('dashboard'))->assertRedirect(route('login'));
        $this->get(route('users.index'))->assertRedirect(route('login'));
    }

    public function test_user_with_temporary_password_cannot_skip_password_change(): void
    {
        $user = $this->createUser('ADMINISTRATOR', true);

        $this->actingAs($user)->get(route('dashboard'))->assertRedirect(route('password.change'));
    }

    public function test_only_administrator_can_open_user_management(): void
    {
        $patient = $this->createUser('PATIENT', false);
        $this->actingAs($patient)->get(route('users.index'))->assertForbidden();

        $administrator = $this->createUser('ADMINISTRATOR', false, 'MARA900101MDFRRS09');
        $this->actingAs($administrator)->get(route('users.index'))->assertOk();
    }

    private function createUser(string $roleCode, bool $mustChange, string $curp = 'DIMA900101MDFRRS08'): User
    {
        $role = Role::query()->create([
            'code' => $roleCode,
            'name' => $roleCode,
        ]);
        $person = Person::query()->create([
            'curp' => $curp,
            'first_name' => 'Persona',
            'last_name' => 'Prueba',
        ]);

        return User::query()->create([
            'person_id' => $person->id,
            'role_id' => $role->id,
            'email' => strtolower($roleCode).'@example.test',
            'password' => Hash::make('Temporal12345'),
            'must_change_password' => $mustChange,
            'status' => User::STATUS_ACTIVE,
        ])->load(['person', 'role']);
    }
}
