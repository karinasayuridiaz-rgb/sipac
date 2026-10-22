<!doctype html>
<html lang="es" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Recuperación de contraseña SIPAC" />
    <title>Recuperación de contraseña - SIPAC</title>
    <script src=  "{{ asset('js/color-modes.js') }}"></script>
    <link href= "{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href=  "{{ asset('css/sign-in.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/globalstyles.css') }}" rel="stylesheet" />
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
    </style>
  </head>

  <body class="d-flex align-items-center py-4" style="background: var(--background-color-login, linear-gradient(135deg, #7c1a22 0%, #1a0826 100%)) !important; min-height: 100vh;">
    
    <main class="form-signin w-100 m-auto text-center" style="background-color: #ffffff; padding: 2.5rem 2rem; border-radius: 12px; box-shadow: 0px 10px 30px rgba(0,0,0,0.3); max-width: 400px;">
      <form method="POST" action="{{ route('password.update') }}" novalidate>
        @csrf
        @method('PUT')
        
        <img
          class="mb-2"
          src=  "{{ asset('img/logo.PNG') }}"
          alt="SIPAC Logo"
          width="48"
          height="48"
        />
        
       
        <h1 class="h4 mb-1 fw-bold" style="color: var(--main-color, #9b1d20);">SIPAC</h1>
        <p class="mb-3" style="color: var(--text-gray, #6c757d); font-size: 0.85rem;">Sistema de Atención Psicológica Comunitaria</p>
        
        
        <h2 class="h6 mb-4 fw-bold text-dark">Recuperación de contraseña</h2>

         
        <div class="mb-3 text-start">
          <label for="currentPassword" class="form-label fw-bold small" style="color: #1e293b; font-size: 0.8rem;">Contraseña actual</label>
          <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="currentPassword" name="current_password" autocomplete="current-password" required />
          @error('current_password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3 text-start">
          <label for="newPassword" class="form-label fw-bold small" style="color: #1e293b; font-size: 0.8rem;">Nueva contraseña</label>
          <input
            type="password"
            class="form-control"
            id="newPassword"
            name="password"
            autocomplete="new-password"
            placeholder="............"
            style="background-color: #f8fafc; border: 1px solid #e2e8f0; font-size: 0.9rem;"
            required
          />
        </div>

         
        <div class="mb-4 text-start">
          <label for="confirmPassword" class="form-label fw-bold small" style="color: #1e293b; font-size: 0.8rem;">Confirma tu nueva contraseña</label>
          <input
            type="password"
            class="form-control @error('password') is-invalid @enderror"
            id="confirmPassword"
            name="password_confirmation"
            autocomplete="new-password"
            placeholder="............"
            style="background-color: #f8fafc; border: 1px solid #e2e8f0; font-size: 0.9rem;"
            required
          />
          @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
 
        <button class="btn w-100 py-2 fw-bold" type="submit" style="background-color: var(--main-color, #9b1d20); color: white;">
          Actualizar contraseña
        </button>
      </form>
    </main>

    <script src=  "{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
