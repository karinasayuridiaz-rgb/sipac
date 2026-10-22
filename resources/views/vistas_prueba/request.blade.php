<!doctype html>
<html lang="es" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Recuperación de contraseña - SIPAC" />
    <title>Recuperar Contraseña - SIPAC</title>
    
    <script src="{{ asset('js/color-modes.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/sign-in.css') }}" />
    <link href="{{ asset('css/globalstyles.css') }}" rel="stylesheet" />
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>

  <body class="d-flex align-items-center py-4" style="background: var(--background-color-login) !important; min-height: 100vh;">
    
    <main class="form-signin w-100 m-auto text-center" style="background-color: #ffffff; padding: 2.5rem 2rem; border-radius: 12px; box-shadow: 0px 10px 30px rgba(0,0,0,0.3); max-width: 380px;">
      <form>
     
        <img
          class="mb-2"
          src="{{ asset('img/logo.PNG') }}"
          alt="SIPAC Logo"
          width="48"
          height="48"
        />
        
    
        <h1 class="h4 mb-1 fw-bold" style="color: var(--main-color);">SIPAC</h1>
        <p class="mb-3" style="color: var(--text-gray); font-size: 0.85rem;">Sistema de Atención Psicológica Comunitaria</p>
        
       
        <p class="mb-4 fw-semibold" style="color: #1e293b; font-size: 0.85rem; line-height: 1.3;">
          Recuperación de contraseña,<br />
          ingresa el email vinculado a tu cuenta
        </p>

  
        <div class="mb-4 text-start">
          <label for="email" class="form-label fw-bold small" style="color: #1e293b; font-size: 0.8rem;">Email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="user@gmail.com"
            required
            style="background-color: #f8fafc; border: 1px solid #e2e8f0; font-size: 0.9rem; padding: 0.6rem 0.75rem;"
          />
        </div>

      
        <button class="btn w-100 py-2 fw-bold" type="submit" style="background-color: var(--main-color); color: white;">
          Solicitar email de recuperación
        </button>

        
        <div class="mt-4">
          <a href="index.html" class="fw-bold small" style="color: var(--main-color); text-decoration: none;">
            Volver al inicio de sesión
          </a>
        </div>
      </form>
    </main>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> 
  </body>
</html>