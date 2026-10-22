<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Registro de Paciente SIPAC" />
  <title>Registrar Paciente - SIPAC</title>
  
  <link href= "{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href= "{{ asset('css/dashboard.css') }}"rel="stylesheet" />
  <link href= "{{ asset('css/globalstyles.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  <style>
    :root {
      --main-red: #8B181B;
      --main-red-hover: #731316;
      --bg-light-gray: #f8fafc;
      --sidebar-gray: #475569;
    }

    body {
      background-color: var(--bg-light-gray);
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }

 
    .sidebar {
      min-height: 100vh;
      background-color: #ffffff;
      border-right: 1px solid #e2e8f0;
      display: flex;
      flex-direction: column;
    }

    .brand-logo {
      color: var(--main-red) !important;
      font-weight: 800;
      font-size: 1.45rem;
      display: inline-flex !important;
      align-items: center;
      gap: 0.75rem;
      padding: 1.5rem 0.75rem 1.75rem 0.75rem;
      text-decoration: none;
      letter-spacing: 0.5px;
      line-height: 1;
    }

    .brand-logo i {
      color: var(--main-red) !important;
      font-size: 1.6rem;
    }

    .sidebar .nav-link {
      color: var(--sidebar-gray) !important;
      font-weight: 500;
      padding: 0.75rem 1rem;
      border-radius: 0.6rem;
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.85rem;
      transition: all 0.2s ease-in-out;
      text-decoration: none;
    }

    .sidebar .nav-link i {
      color: var(--sidebar-gray) !important;
      font-size: 1.2rem;
    }

    .sidebar .nav-link:hover {
      background-color: #f1f5f9 !important;
      color: #0f172a !important;
    }

   
    .sidebar .nav-link.active {
      background-color: var(--main-red) !important;
      color: #ffffff !important;
      box-shadow: 0 2px 4px rgba(139, 24, 27, 0.2);
    }

    .sidebar .nav-link.active i {
      color: #ffffff !important;
    }

     
    .logout-btn {
      color: var(--main-red) !important;
      margin-top: auto;
      margin-bottom: 1.5rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 0.85rem;
      padding: 0.75rem 1rem;
      border-radius: 0.6rem;
      text-decoration: none;
    }

    .logout-btn i {
      color: var(--main-red) !important;
      font-size: 1.25rem;
    }

    .logout-btn:hover {
      background-color: #fef2f2 !important;
      color: #731316 !important;
    }

 
    .top-header {
      padding: 1.5rem 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 0.5rem;
    }

    .profile-section {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .profile-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
      background-color: #e2e8f0;
    }

     
    .custom-card {
      background: #ffffff;
      border: 1px solid #edf2f7;
      border-radius: 1.25rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
    }

    .avatar-upload-box {
      width: 68px;
      height: 68px;
      border-radius: 50%;
      background-color: #ffffff;
      border: 1px dashed #cbd5e1;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #94a3b8;
      font-size: 1.85rem;
      flex-shrink: 0;
    }

    .btn-outline-custom {
      border-color: var(--main-red);
      color: var(--main-red);
      font-weight: 500;
      border-radius: 0.4rem;
      font-size: 0.82rem;
      padding: 0.35rem 1rem;
    }

    .btn-outline-custom:hover {
      background-color: var(--main-red);
      color: #ffffff;
    }

    .btn-custom-primary {
      background-color: var(--main-red);
      color: #ffffff;
      font-weight: 600;
      border: none;
      border-radius: 0.5rem;
      padding: 0.65rem 2rem;
      font-size: 0.9rem;
      transition: background-color 0.2s;
    }

    .btn-custom-primary:hover {
      background-color: var(--main-red-hover);
      color: #ffffff;
    }

    .form-label {
      font-size: 0.84rem;
      font-weight: 600;
      color: #1e293b;
      margin-bottom: 0.35rem;
    }

    .form-control, .form-select {
      font-size: 0.875rem;
      border-radius: 0.5rem;
      border-color: #e2e8f0;
      padding: 0.65rem 0.85rem;
      color: #334155;
    }

    .form-control::placeholder {
      color: #94a3b8;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--main-red);
      box-shadow: 0 0 0 0.2rem rgba(139, 24, 27, 0.12);
    }

   
    .emergency-section-title {
      font-size: 1.05rem;
      font-weight: 700;
      color: #1e293b;
    }

    .btn-add-contact {
      color: var(--main-red);
      background: none;
      border: none;
      font-size: 1.6rem;
      line-height: 1;
      padding: 0;
      cursor: pointer;
      transition: transform 0.15s ease;
    }

    .btn-add-contact:hover {
      transform: scale(1.08);
    }

    .btn-remove-contact {
      color: #ef4444;
      background: none;
      border: none;
      font-size: 1.6rem;
      padding: 0;
      line-height: 1;
      cursor: pointer;
      display: flex;
      align-items: center;
      margin-bottom: 0.2rem;
    }

    .btn-remove-contact:hover {
      color: #dc2626;
    }

     
    .form-check-input:checked {
      background-color: var(--main-red);
      border-color: var(--main-red);
    }

    .profile-badge-avatar {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background-color: #fde68a;  
      color: #1e293b;             
      font-size: 1rem;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: center;
      letter-spacing: -0.5px;
      flex-shrink: 0;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      
       
      <div class="col-md-3 col-lg-2 px-3 sidebar d-none d-md-flex position-fixed">
        <a href="#" class="brand-logo">
          <i class="bi bi-heart-pulse-fill"></i>
          <span>SIPAC</span>
        </a>
        
        <ul class="nav flex-column mb-auto w-100">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-house"></i>
              <span>Inicio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-people"></i>
              <span>Usuarios</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-person-add"></i>
              <span>Registrar Psicólogo</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="bi bi-person-add"></i>
              <span>Registrar Paciente</span>
            </a>
          </li>
        </ul>

        
        <ul class="nav flex-column w-100 mt-auto">
          <li class="nav-item border-top pt-3">
            <a class="logout-btn" href="#">
              <i class="bi bi-box-arrow-left"></i>
              <span>Cerrar Sesión</span>
            </a>
          </li>
        </ul>
      </div>

       
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 offset-md-3 offset-lg-2">
        
        
        <div class="top-header">
          <h1 class="h4 mb-0 fw-bold text-dark">Registrar Paciente</h1>
            <div class="profile-section">
              <div class="profile-badge-avatar">AD</div>
              <div class="d-flex flex-column lh-1">
                <span class="fw-bold text-dark" style="font-size: 0.95rem;">Administrador</span>
                <span class="text-muted" style="font-size: 0.8rem;">Perfil</span>
              </div>
            </div>
        </div>

        
        <div class="row justify-content-center mb-5">
          <div class="col-12 col-xl-10">
            <div class="custom-card p-4 p-md-5">
              
              <div class="mb-4">
                <h4 class="fw-bold text-dark mb-1">Información del Paciente</h4>
                <p class="text-muted small">Completa los campos obligatorios para dar de alta al paciente en SIPAC.</p>
              </div>

              
              <div class="d-flex align-items-center gap-3 mb-4 pb-2">
                <div class="avatar-upload-box">
                  <i class="bi bi-person"></i>
                </div>
                <div>
                  <button type="button" class="btn btn-outline-custom btn-sm">Subir Avatar</button>
                  <div class="text-muted small mt-1" style="font-size: 0.75rem;">Formatos aceptados: PNG, JPG. Máximo 2MB.</div>
                </div>
              </div>

             
              <form class="needs-validation" novalidate>
                <div class="row g-3">
                  
                  
                  <div class="col-md-6">
                    <label for="fullName" class="form-label">Nombre y apellidos</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Karina Sayuri Díaz Martínez" required>
                    <div class="invalid-feedback">Ingresa el nombre y apellidos.</div>
                  </div>
 
                  <div class="col-md-6">
                    <label for="username" class="form-label">Nombre de usuario (recuerda guardarlo)</label>
                    <input type="text" class="form-control" id="username" placeholder="Moonieex" required>
                    <div class="invalid-feedback">El nombre de usuario es obligatorio.</div>
                  </div>

              
                  <div class="col-md-6">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="af.giraldo@psicogestion.com" required>
                    <div class="invalid-feedback">Ingresa un correo electrónico válido.</div>
                  </div>

               
                  <div class="col-md-6">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="phone" placeholder="5588374683" required>
                    <div class="invalid-feedback">Ingresa un número telefónico.</div>
                  </div>

            
                  <div class="col-md-6">
                    <label for="password" class="form-label">Contraseña (recuerda guardarla)</label>
                    <input type="password" class="form-control" id="password" placeholder="••••••••••••" required>
                    <div class="invalid-feedback">Ingresa una contraseña.</div>
                  </div>

                   
                  <div class="col-md-6">
                    <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="••••••••••••" required>
                    <div class="invalid-feedback">Confirma la contraseña.</div>
                  </div>
 
                  <div class="col-md-6">
                    <label for="curp" class="form-label">CURP</label>
                    <input type="text" class="form-control" id="curp" placeholder="CATHO31574HMREEFFA" required>
                    <div class="invalid-feedback">Ingresa una CURP válida.</div>
                  </div>

                  
                  <div class="col-md-6">
                    <label for="address" class="form-label">Domicilio</label>
                    <input type="text" class="form-control" id="address" placeholder="Calle Margaritas, CDMX, C.P. 54777" required>
                    <div class="invalid-feedback">Ingresa el domicilio.</div>
                  </div>

                   
                  <div class="col-md-6">
                    <label for="birthDate" class="form-label">Fecha de cumpleaños</label>
                    <input type="date" class="form-control" id="birthDate" required>
                    <div class="invalid-feedback">Selecciona la fecha de nacimiento.</div>
                  </div>

                  
                  <div class="col-md-6">
                    <label for="gender" class="form-label">Género</label>
                    <select class="form-select" id="gender" required>
                      <option value="" disabled>Selecciona un género...</option>
                      <option value="Masculino" selected>Masculino</option>
                      <option value="Femenino">Femenino</option>
                      <option value="Otro">Otro</option>
                    </select>
                    <div class="invalid-feedback">Selecciona el género.</div>
                  </div>

                </div>
 
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5 class="emergency-section-title mb-0">Agregue los contactos de emergencia del paciente</h5>
                    <button type="button" class="btn-add-contact" title="Agregar otro contacto">
                      <i class="bi bi-plus-circle-fill"></i>
                    </button>
                  </div>
                  <p class="text-muted small mb-3">Se recomienda por lo menos agregar uno.</p>

                  <div class="row g-3 align-items-center">
                  
                    <div class="col-md-6">
                      <label for="emergencyName" class="form-label">Nombre y apellidos</label>
                      <input type="text" class="form-control" id="emergencyName" placeholder="Juan Manuel Díaz Cruz">
                    </div>

                 
                    <div class="col-md-6">
                      <label for="relationship" class="form-label">Parentesco</label>
                      <select class="form-select" id="relationship">
                        <option value="Padre" selected>Padre</option>
                        <option value="Madre">Madre</option>
                        <option value="Tutor">Tutor / Tutora</option>
                        <option value="Cónyuge">Cónyuge / Pareja</option>
                        <option value="Hermano(a)">Hermano(a)</option>
                        <option value="Otro">Otro</option>
                      </select>
                    </div>

              
                    <div class="col-md-6">
                      <label for="emergencyEmail" class="form-label">Correo Electrónico</label>
                      <input type="email" class="form-control" id="emergencyEmail" placeholder="af.giraldo@psicogestion.com">
                    </div>

                  
                    <div class="col-md-6">
                      <label for="emergencyPhone" class="form-label">Teléfono</label>
                      <div class="d-flex align-items-center gap-2">
                        <input type="tel" class="form-control" id="emergencyPhone" placeholder="5588374683">
                        <button type="button" class="btn-remove-contact" title="Eliminar contacto">
                          <i class="bi bi-x-circle-fill"></i>
                        </button>
                      </div>
                    </div>

                    
                    <div class="col-12 mt-3">
                      <div class="form-check form-switch d-flex align-items-center gap-2 ps-0">
                        <label class="form-check-label fw-bold text-dark small me-2" for="isPrimaryContact">
                          Es el contacto principal del paciente:
                        </label>
                        <input class="form-check-input ms-0 mt-0" type="checkbox" role="switch" id="isPrimaryContact" checked>
                      </div>
                    </div>

                  </div>
                </div>
 
                <div class="d-flex justify-content-end mt-4 pt-2">
                  <button class="btn btn-custom-primary" type="submit">Registrar Paciente</button>
                </div>
              </form>

            </div>
          </div>
        </div>

      </main>
    </div>
  </div>

  <script src= "{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script>
    (() => {
      'use strict'
      const forms = document.querySelectorAll('.needs-validation')
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>

</html>