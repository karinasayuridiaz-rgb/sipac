<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('vistas_prueba.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'curp' => ['required', 'string', 'size:18'],
            'password' => ['required', 'string'],
        ]);

        $curp = mb_strtoupper(trim($credentials['curp']));
        $throttleKey = 'login:'.mb_strtolower($curp).'|'.$request->ip();

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            throw ValidationException::withMessages([
                'curp' => 'Demasiados intentos. Intenta nuevamente en '.RateLimiter::availableIn($throttleKey).' segundos.',
            ]);
        }

        $user = User::query()
            ->with(['person', 'role'])
            ->whereHas('person', fn ($query) => $query->where('curp', $curp))
            ->first();

        if (! $user || ! $user->isActive() || ! Hash::check($credentials['password'], $user->password)) {
            RateLimiter::hit($throttleKey, 60);
            $user?->increment('failed_login_attempts');

            throw ValidationException::withMessages([
                'curp' => 'La CURP o la contraseña no son correctas.',
            ]);
        }

        RateLimiter::clear($throttleKey);
        $user->forceFill(['failed_login_attempts' => 0, 'last_login_at' => now()])->save();
        Auth::login($user, $request->boolean('remember'));
        $request->session()->regenerate();

        return $user->must_change_password
            ? redirect()->route('password.change')
            : redirect()->intended(route('dashboard'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
