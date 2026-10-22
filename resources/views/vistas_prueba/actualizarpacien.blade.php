<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Actualizar Paciente SIPAC" />
  <title>Actualizar Paciente - SIPAC</title>

  <link href=  "{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href= "{{ asset('css/dashboard.css') }}" rel="stylesheet" />
  <link href= "{{ asset('css/globalstyles.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  <style>
    :root {
      --main-red: #8B181B;
      --main-red-hover: #731316;
      --bg-page: #f8fafc;
      --sidebar-gray: #475569;
      --border-color: #e2e8f0;
    }

    body {
      background-color: var(--bg-page);
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      color: #1e293b;
    }

   
    .sidebar {
      min-height: 100vh;
      background-color: #ffffff;
      border-right: 1px solid var(--border-color);
      display: flex;
      flex-direction: column;
      z-index: 1000;
      padding: 1.5rem 1.25rem;
    }

    .brand-logo {
      color: #8B181B !important;
      font-weight: 800;
      font-size: 1.35rem;
      display: inline-flex !important;
      align-items: center;
      gap: 0.65rem;
      padding-bottom: 2rem;
      text-decoration: none;
      letter-spacing: 0.2px;
    }

    .brand-logo i {
      color: #8B181B !important;
      font-size: 1.5rem;
    }

    .sidebar .nav-link {
      color: var(--sidebar-gray) !important;
      font-weight: 500;
      padding: 0.65rem 0.95rem;
      border-radius: 0.5rem;
      margin-bottom: 0.35rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      transition: all 0.2s ease-in-out;
      text-decoration: none;
      font-size: 0.9rem;
    }

    .sidebar .nav-link i {
      color: var(--sidebar-gray) !important;
      font-size: 1.15rem;
    }

    .sidebar .nav-link:hover {
      background-color: #f1f5f9 !important;
      color: #0f172a !important;
    }

    .sidebar .nav-link.active {
      background-color: var(--main-red) !important;
      color: #ffffff !important;
    }

    .sidebar .nav-link.active i {
      color: #ffffff !important;
    }

    .logout-btn {
      color: #ef4444 !important;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      padding: 0.65rem 0.95rem;
      border-radius: 0.5rem;
      text-decoration: none;
      font-size: 0.88rem;
      transition: background-color 0.2s;
    }

    .logout-btn:hover {
      background-color: #fef2f2 !important;
    }


    .top-header {
      padding: 1.75rem 0 1.25rem 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .top-header h1 {
      font-size: 1.35rem;
      font-weight: 700;
      color: #0f172a;
      letter-spacing: -0.01em;
    }

    .profile-section {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .profile-avatar-circle {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      color: #64748b;
      font-size: 1.25rem;
      flex-shrink: 0;
    }

    .form-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 1.15rem;
      padding: 2.5rem 2.75rem;
      max-width: 900px;
      margin-bottom: 4rem;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
    }

    .form-card-title {
      font-size: 1.1rem;
      font-weight: 700;
      color: #0f172a;
      margin-bottom: 0.2rem;
    }

    .form-card-subtitle {
      font-size: 0.82rem;
      color: #64748b;
      margin-bottom: 1.75rem;
    }

    
    .avatar-upload-container {
      display: flex;
      align-items: center;
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .avatar-placeholder-circle {
      width: 82px;
      height: 82px;
      border-radius: 50%;
      background-color: #f1f5f9;
      border: 1px solid #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #94a3b8;
      font-size: 2.5rem;
      flex-shrink: 0;
    }

    .avatar-actions-group {
      display: flex;
      flex-direction: column;
      gap: 0.45rem;
    }

    .btn-avatar-change {
      border: 1.2px solid #8B181B;
      color: #8B181B;
      background-color: #ffffff;
      font-weight: 600;
      font-size: 0.78rem;
      border-radius: 0.5rem;
      padding: 0.4rem 1.25rem;
      width: fit-content;
      transition: all 0.2s;
    }

    .btn-avatar-change:hover {
      background-color: #fef2f2;
    }

    .avatar-format-hint {
      font-size: 0.72rem;
      color: #94a3b8;
      margin: 0;
    }

    .btn-avatar-delete {
      background-color: #fca5a5;
      border: 1px solid #f87171;
      color: #8B181B;
      font-weight: 600;
      font-size: 0.78rem;
      border-radius: 0.5rem;
      padding: 0.4rem 1.25rem;
      width: fit-content;
      transition: all 0.2s;
    }

    .btn-avatar-delete:hover {
      background-color: #f87171;
      color: #ffffff;
    }

   
    .custom-label {
      font-size: 0.8rem;
      font-weight: 600;
      color: #1e293b;
      margin-bottom: 0.4rem;
      display: block;
    }

    .form-control-custom,
    .form-select-custom {
      border: 1px solid #e2e8f0;
      border-radius: 0.55rem;
      padding: 0.58rem 0.85rem;
      font-size: 0.85rem;
      color: #1e293b;
      background-color: #ffffff;
      height: 42px;
      width: 100%;
      transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-control-custom:focus,
    .form-select-custom:focus {
      outline: none;
      border-color: #cbd5e1;
      box-shadow: 0 0 0 2px rgba(139, 24, 27, 0.08);
    }

  
    .section-emergency-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 2.25rem;
      margin-bottom: 1.25rem;
    }

    .btn-add-circle {
      color: #dc2626;
      font-size: 1.75rem;
      line-height: 1;
      background: none;
      border: none;
      padding: 0;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.15s;
    }

    .btn-add-circle:hover {
      transform: scale(1.08);
    }

    .emergency-contact-block {
      position: relative;
      padding-bottom: 1.5rem;
    }

    .btn-delete-contact {
      color: #f43f5e;
      background: none;
      border: none;
      font-size: 1.6rem;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      padding: 0;
      transition: transform 0.15s;
    }

    .btn-delete-contact:hover {
      transform: scale(1.1);
    }

   
    .form-check-input-custom {
      cursor: pointer;
      width: 2.5em;
      height: 1.3em;
    }

    .form-check-input-custom:checked {
      background-color: #1e293b;
      border-color: #1e293b;
    }

    
    .form-actions {
      display: flex;
      justify-content: flex-end;
      gap: 0.85rem;
      margin-top: 2rem;
    }

    .btn-cancel {
      background-color: #e2e8f0;
      color: #1e293b;
      border: none;
      font-weight: 600;
      font-size: 0.85rem;
      padding: 0.6rem 1.6rem;
      border-radius: 0.5rem;
      transition: background-color 0.2s;
    }

    .btn-cancel:hover {
      background-color: #cbd5e1;
      color: #0f172a;
    }

    .btn-save {
      background-color: var(--main-red);
      color: #ffffff;
      border: none;
      font-weight: 600;
      font-size: 0.85rem;
      padding: 0.6rem 1.6rem;
      border-radius: 0.5rem;
      transition: background-color 0.2s;
    }

    .btn-save:hover {
      background-color: var(--main-red-hover);
      color: #ffffff;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      
   
      <aside class="col-md-3 col-lg-2 sidebar d-none d-md-flex position-fixed">
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
            <a class="nav-link active" aria-current="page" href="#">
              <i class="bi bi-people"></i>
              <span>Usuarios</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-person-plus"></i>
              <span>Registrar Psicólogo</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-person-plus"></i>
              <span>Registrar Paciente</span>
            </a>
          </li>
        </ul>

        <div class="w-100 mt-auto border-top pt-3">
          <a class="logout-btn" href="#">
            <i class="bi bi-box-arrow-left"></i>
            <span>Cerrar Sesión</span>
          </a>
        </div>
      </aside>

      
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 offset-md-3 offset-lg-2">
        
    
        <div class="top-header">
          <h1 class="mb-0">Actualizar Paciente</h1>
          <div class="profile-section">
            <div class="profile-avatar-circle">
              <i class="bi bi-person-fill"></i>
            </div>
            <div class="d-flex flex-column lh-1">
              <span class="fw-bold text-dark" style="font-size: 0.9rem;">Administrador</span>
              <span class="text-muted" style="font-size: 0.75rem;">Perfil</span>
            </div>
          </div>
        </div>

       
        <div class="form-card">
          <h2 class="form-card-title">Información del Paciente</h2>
          <p class="form-card-subtitle">Actualiza los campos de interés del paciente en SIPAC.</p>

        
          <div class="avatar-upload-container">
            <div class="avatar-placeholder-circle">
              <i class="bi bi-person"></i>
            </div>
            <div class="avatar-actions-group">
              <button type="button" class="btn-avatar-change">Cambiar Avatar</button>
              <p class="avatar-format-hint">Formatos aceptados: PNG, JPG. Máximo 2MB.</p>
              <button type="button" class="btn-avatar-delete">Eliminar Avatar</button>
            </div>
          </div>

          <form>
           
            <div class="row g-3">
              <div class="col-md-6">
                <label class="custom-label">Nombre y apellidos</label>
                <input type="text" class="form-control-custom" value="Karina Sayuri Díaz Martínez" />
              </div>
              <div class="col-md-6">
                <label class="custom-label">Nombre de usuario</label>
                <input type="text" class="form-control-custom" value="Mooniieex" />
              </div>

              <div class="col-md-6">
                <label class="custom-label">Teléfono</label>
                <input type="text" class="form-control-custom" value="5588374683" />
              </div>
              <div class="col-md-6">
                <label class="custom-label">Activo en el sistema</label>
                <select class="form-select-custom">
                  <option value="si" selected>Sí</option>
                  <option value="no">No</option>
                </select>
              </div>

              <div class="col-md-6">
                <label class="custom-label">CURP</label>
                <input type="text" class="form-control-custom" value="CATH031674HMREEFFA" />
              </div>
              <div class="col-md-6">
                <label class="custom-label">Domicilio</label>
                <input type="text" class="form-control-custom" value="Calle Margaritas, CDMX, C.P. 54777" />
              </div>

              <div class="col-md-6">
                <label class="custom-label">Fecha de cumpleaños</label>
                <input type="date" class="form-control-custom" value="2003-11-11" />
              </div>
              <div class="col-md-6">
                <label class="custom-label">Género</label>
                <select class="form-select-custom">
                  <option value="femenino" selected>Femenino</option>
                  <option value="masculino">Masculino</option>
                  <option value="otro">Otro</option>
                </select>
              </div>
            </div>

           
            <div class="section-emergency-header">
              <div>
                <h3 class="form-card-title mb-1" style="font-size: 0.95rem;">Agregue los contactos de emergencia del paciente</h3>
                <p class="text-muted mb-0" style="font-size: 0.8rem;">Se recomienda por lo menos agregar uno.</p>
              </div>
              <button type="button" class="btn-add-circle" title="Agregar contacto">
                <i class="bi bi-plus-circle-fill"></i>
              </button>
            </div>

            
            <div class="emergency-contact-block border-bottom pb-4 mb-4">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="custom-label">Nombre y apellidos</label>
                  <input type="text" class="form-control-custom" value="Juan Manuel Díaz Cruz" />
                </div>
                <div class="col-md-6">
                  <label class="custom-label">Parentesco</label>
                  <select class="form-select-custom">
                    <option value="padre" selected>Padre</option>
                    <option value="madre">Madre</option>
                    <option value="amigo">Amigo(a)</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="custom-label">Correo Electrónico</label>
                  <input type="email" class="form-control-custom" value="af.giraldo@psicogestion.com" />
                </div>
                <div class="col-md-6">
                  <label class="custom-label">Teléfono</label>
                  <div class="d-flex align-items-center gap-2">
                    <input type="text" class="form-control-custom" value="5588374683" />
                    <button type="button" class="btn-delete-contact" title="Eliminar contacto">
                      <i class="bi bi-x-circle-fill"></i>
                    </button>
                  </div>
                </div>

                <div class="col-12 mt-2">
                  <div class="d-flex align-items-center gap-3">
                    <span class="custom-label mb-0">Es el contacto principal del paciente:</span>
                    <div class="form-check form-switch m-0 p-0 d-flex align-items-center">
                      <input class="form-check-input form-check-input-custom ms-0" type="checkbox" role="switch" checked>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="emergency-contact-block">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="custom-label">Nombre y apellidos</label>
                  <input type="text" class="form-control-custom" value="Jesus Pérez Olín" />
                </div>
                <div class="col-md-6">
                  <label class="custom-label">Parentesco</label>
                  <select class="form-select-custom">
                    <option value="amigo" selected>Amigo(a)</option>
                    <option value="padre">Padre</option>
                    <option value="madre">Madre</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <label class="custom-label">Correo Electrónico</label>
                  <input type="email" class="form-control-custom" value="jesusito@gmail.com" />
                </div>
                <div class="col-md-6">
                  <label class="custom-label">Teléfono</label>
                  <div class="d-flex align-items-center gap-2">
                    <input type="text" class="form-control-custom" value="5596863214" />
                    <button type="button" class="btn-delete-contact" title="Eliminar contacto">
                      <i class="bi bi-x-circle-fill"></i>
                    </button>
                  </div>
                </div>

                <div class="col-12 mt-2">
                  <div class="d-flex align-items-center gap-3">
                    <span class="custom-label mb-0">Es el contacto principal del paciente:</span>
                    <div class="form-check form-switch m-0 p-0 d-flex align-items-center">
                      <input class="form-check-input form-check-input-custom ms-0" type="checkbox" role="switch">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          
            <div class="form-actions border-top pt-4">
              <button type="button" class="btn btn-cancel">Cancelar</button>
              <button type="submit" class="btn btn-save">Guardar cambios</button>
            </div>
          </form>

        </div>

      </main>
    </div>
  </div>

  <script src= "{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>