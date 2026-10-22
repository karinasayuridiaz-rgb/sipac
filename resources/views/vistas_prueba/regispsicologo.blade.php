<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Registro de Psicólogo SIPAC" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Astro v5.13.2" />
  <title>Registro Psicólogo</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/" />
  
  <script src="{{ asset('js/color-modes.js') }}"></script>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <meta name="theme-color" content="#712cf9" />
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/globalstyles.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  <style>
    :root {
      --main-red: #991b1b;
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
      display: inline-block;
      line-height: 1;
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
      transition: color 0.2s ease;
    }

    .sidebar .nav-link:hover {
      background-color: #f1f5f9 !important;
      color: #0f172a !important;
    }

    .sidebar .nav-link:hover i {
      color: #0f172a !important;
    }

    
    .sidebar .nav-link.active {
      background-color: var(--main-red) !important;
      color: #ffffff !important;
      box-shadow: 0 2px 4px rgba(153, 27, 27, 0.2);
    }

    .sidebar .nav-link.active i {
      color: #ffffff !important;
    }

    .sidebar .nav-link.active:hover {
      background-color: #831818 !important;
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
      color: #7f1d1d !important;
    }

    .logout-btn:hover i {
      color: #7f1d1d !important;
    }

 
    .top-header {
      padding: 1.5rem 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1rem;
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
      border: 1px solid #e2e8f0;
      border-radius: 1rem;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
    }

    .avatar-upload-box {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      background-color: #f8fafc;
      border: 1px dashed #cbd5e1;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #94a3b8;
      font-size: 1.75rem;
      flex-shrink: 0;
    }

    .btn-outline-custom {
      border-color: var(--main-red);
      color: var(--main-red);
      font-weight: 500;
      border-radius: 0.5rem;
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
      padding: 0.65rem 1.75rem;
      transition: background-color 0.2s;
    }

    .btn-custom-primary:hover {
      background-color: #7f1d1d;
      color: #ffffff;
    }

    .form-label {
      font-size: 0.875rem;
      font-weight: 600;
      color: #334155;
      margin-bottom: 0.35rem;
    }

    .form-control, .form-select {
      font-size: 0.875rem;
      border-radius: 0.5rem;
      border-color: #e2e8f0;
      padding: 0.6rem 0.75rem;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--main-red);
      box-shadow: 0 0 0 0.25rem rgba(153, 27, 27, 0.15);
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
            <a class="nav-link active" aria-current="page" href="#">
              <i class="bi bi-person-add"></i>
              <span>Registrar Psicólogo</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
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
          <h1 class="h3 mb-0 fw-bold text-dark">Registrar Psicólogo</h1>
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
                <h4 class="fw-bold text-dark mb-1">Información del Profesional</h4>
                <p class="text-muted small">Completa los campos obligatorios para dar de alta al psicólogo en SIPAC.</p>
              </div>

            
              <div class="d-flex align-items-center gap-3 mb-4 pb-2">
                <div class="avatar-upload-box">
                  <i class="bi bi-person"></i>
                </div>
                <div>
                  <button type="button" class="btn btn-outline-custom btn-sm px-3 py-1">Subir Avatar</button>
                  <div class="text-muted small mt-1" style="font-size: 0.75rem;">Formatos aceptados: PNG, JPG. Máximo 2MB.</div>
                </div>
              </div>

              
              <form class="needs-validation" novalidate>
                <div class="row g-3">
                  
            
                  <div class="col-md-6">
                    <label for="fullName" class="form-label">Nombre y apellidos</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Karina Sayuri Díaz Martínez" required>
                    <div class="invalid-feedback">
                      Ingresa el nombre y apellidos.
                    </div>
                  </div>
 
                  <div class="col-md-6">
                    <label for="username" class="form-label">Nombre de usuario (recuerda guardarlo)</label>
                    <input type="text" class="form-control" id="username" placeholder="Moonieex" required>
                    <div class="invalid-feedback">
                      El nombre de usuario es obligatorio.
                    </div>
                  </div>

                  
                  <div class="col-md-6">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="af.giraldo@psicogestion.com" required>
                    <div class="invalid-feedback">
                      Ingresa un correo electrónico válido.
                    </div>
                  </div>

                  
                  <div class="col-md-6">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="phone" placeholder="5588374683" required>
                    <div class="invalid-feedback">
                      Ingresa un número telefónico.
                    </div>
                  </div>

                   
                  <div class="col-md-6">
                    <label for="password" class="form-label">Contraseña (recuerda guardarla)</label>
                    <input type="password" class="form-control" id="password" placeholder="••••••••••••" required>
                    <div class="invalid-feedback">
                      Ingresa una contraseña.
                    </div>
                  </div>

                   
                  <div class="col-md-6">
                    <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="••••••••••••" required>
                    <div class="invalid-feedback">
                      Confirma la contraseña.
                    </div>
                  </div>

                   
                  <div class="col-md-6">
                    <label for="specialty" class="form-label">Especialidad</label>
                    <select class="form-select" id="specialty" required>
                      <option value="" selected disabled>Selecciona una especialidad...</option>
                      <option value="Ansiedad">Ansiedad</option>
                      <option value="Depresión">Depresión</option>
                      <option value="Terapia Familiar">Terapia Familiar</option>
                      <option value="Infantil">Infantil</option>
                    </select>
                    <div class="invalid-feedback">
                      Selecciona una especialidad válida.
                    </div>
                  </div>

               
                  <div class="col-md-6">
                    <label for="license" class="form-label">Número de Licencia (cédula profesional)</label>
                    <input type="text" class="form-control" id="license" placeholder="L-9923415-COL" required>
                    <div class="invalid-feedback">
                      Ingresa la cédula profesional.
                    </div>
                  </div>

           
                  <div class="col-md-6">
                    <label for="curp" class="form-label">CURP</label>
                    <input type="text" class="form-control" id="curp" placeholder="CATH04IE031215HGRRP" required>
                    <div class="invalid-feedback">
                      Ingresa una CURP válida.
                    </div>
                  </div>

                   
                  <div class="col-md-6">
                    <label for="address" class="form-label">Domicilio</label>
                    <input type="text" class="form-control" id="address" placeholder="Calle Bugambilias, Colonia Lomas, CDMX." required>
                    <div class="invalid-feedback">
                      Ingresa el domicilio.
                    </div>
                  </div>

               
                  <div class="col-md-6">
                    <label for="experience" class="form-label">Años de experiencia</label>
                    <input type="number" class="form-control" id="experience" value="1" min="0" required>
                    <div class="invalid-feedback">
                      Ingresa los años de experiencia.
                    </div>
                  </div>

                  
                  <div class="col-md-6">
                    <label for="fee" class="form-label">Tarifa de consulta</label>
                    <input type="number" step="0.01" class="form-control" id="fee" placeholder="0.00" required>
                    <div class="invalid-feedback">
                      Ingresa el monto de la tarifa.
                    </div>
                  </div>

             
                  <div class="col-12">
                    <label for="trajectory" class="form-label">Agrega una descripción de tu trayectoria profesional</label>
                    <input type="text" class="form-control" id="trajectory" placeholder="Llevo una trayectoria...">
                  </div>

                </div>

                
                <div class="d-flex justify-content-end mt-4 pt-2">
                  <button class="btn btn-custom-primary" type="submit">Registrar Profesional</button>
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