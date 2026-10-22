<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Actualizar Psicólogo SIPAC" />
  <title>Actualizar Psicólogo - SIPAC</title>
  
  <link href= "{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
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
    }

    .brand-logo {
      color: #991B1B !important;
      font-weight: 800;
      font-size: 1.45rem;
      display: inline-flex !important;
      align-items: center;
      gap: 0.75rem;
      padding: 1.5rem 0.75rem 1.75rem 0.75rem;
      text-decoration: none;
      letter-spacing: 0.5px;
    }

    .brand-logo i {
      color: #991B1B !important;
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
      font-size: 0.95rem;
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
      font-size: 0.95rem;
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

    .profile-avatar-circle {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background-color: #cbd5e1;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      color: #475569;
      font-size: 1.2rem;
      flex-shrink: 0;
    }

  
    .form-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 1.25rem;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.02);
      padding: 2.75rem;
      max-width: 980px;
      margin-bottom: 4rem;
    }

    .form-card-title {
      font-size: 1.2rem;
      font-weight: 700;
      color: #0f172a;
      margin-bottom: 0.25rem;
    }

    .form-card-subtitle {
      font-size: 0.85rem;
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
      width: 72px;
      height: 72px;
      border-radius: 50%;
      background-color: #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #94a3b8;
      font-size: 2.2rem;
      flex-shrink: 0;
    }

    .avatar-actions-group {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .btn-avatar-change {
      border: 1px solid #c24141;
      color: #8B181B;
      background-color: #ffffff;
      font-weight: 500;
      font-size: 0.78rem;
      border-radius: 0.45rem;
      padding: 0.35rem 1.1rem;
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
      color: #7f1d1d;
      font-weight: 500;
      font-size: 0.78rem;
      border-radius: 0.45rem;
      padding: 0.35rem 1.1rem;
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
      color: #0f172a;
      margin-bottom: 0.45rem;
      display: block;
    }

    .form-control-custom,
    .form-select-custom {
      border: 1px solid #e2e8f0;
      border-radius: 0.6rem;
      padding: 0.65rem 0.95rem;
      font-size: 0.88rem;
      color: #1e293b;
      background-color: #ffffff;
      transition: border-color 0.2s, box-shadow 0.2s;
      width: 100%;
    }

    .form-control-custom:focus,
    .form-select-custom:focus {
      outline: none;
      border-color: #cbd5e1;
      box-shadow: 0 0 0 3px rgba(139, 24, 27, 0.08);
    }

    .specialty-badge-box {
      border: 1px solid #e2e8f0;
      border-radius: 0.6rem;
      padding: 0.5rem 0.85rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
      min-height: 42px;
      background-color: #ffffff;
    }

    .specialty-tag {
      font-size: 0.82rem;
      color: #334155;
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      font-weight: 500;
      margin-right: 0.5rem;
    }


    .form-actions {
      display: flex;
      justify-content: flex-end;
      gap: 0.85rem;
      margin-top: 2.5rem;
    }

    .btn-cancel {
      background-color: #e2e8f0;
      color: #1e293b;
      border: none;
      font-weight: 600;
      font-size: 0.88rem;
      padding: 0.65rem 1.65rem;
      border-radius: 0.55rem;
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
      font-size: 0.88rem;
      padding: 0.65rem 1.65rem;
      border-radius: 0.55rem;
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
            <a class="nav-link active" aria-current="page" href="#">
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

      
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 offset-md-3 offset-lg-2">
        
      
        <div class="top-header">
          <h1 class="h4 mb-0 fw-bold text-dark">Actualizar Psicólogo</h1>
          <div class="profile-section">
            <div class="profile-avatar-circle">
              <i class="bi bi-person-fill"></i>
            </div>
            <div class="d-flex flex-column lh-1">
              <span class="fw-bold text-dark" style="font-size: 0.95rem;">Administrador</span>
              <span class="text-muted" style="font-size: 0.8rem;">Perfil</span>
            </div>
          </div>
        </div>

     
        <div class="form-card">
          <h2 class="form-card-title">Información del Profesional</h2>
          <p class="form-card-subtitle">Actualiza los campos de interés del psicólogo en SIPAC.</p>

         
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
                <input type="text" class="form-control-custom" value="Doc. Juan Manuel Solís" />
              </div>
              <div class="col-md-6">
                <label class="custom-label">Nombre de usuario (recuerda guardarlo)</label>
                <input type="text" class="form-control-custom" value="JuanMaSolis" />
              </div>

       
              <div class="col-md-6">
                <label class="custom-label">Especialidad</label>
                <div class="specialty-badge-box">
                  <div>
                    <span class="specialty-tag">✕ Ansiedad</span>
                    <span class="specialty-tag">✕ Ansiedad</span>
                  </div>
                  <i class="bi bi-chevron-down text-muted" style="font-size: 0.85rem;"></i>
                </div>
              </div>
              <div class="col-md-6">
                <label class="custom-label">Activo en el sistema</label>
                <select class="form-select-custom">
                  <option value="si" selected>Sí</option>
                  <option value="no">No</option>
                </select>
              </div>

        
              <div class="col-md-6">
                <label class="custom-label">Teléfono</label>
                <input type="text" class="form-control-custom" value="558837468" />
              </div>
              <div class="col-md-6">
                <label class="custom-label">Número de Licencia (cédula profesional)</label>
                <input type="text" class="form-control-custom" value="L-9823415-COL" />
              </div>

         
              <div class="col-md-6">
                <label class="custom-label">CURP</label>
                <input type="text" class="form-control-custom" value="CATH041E031215HGRRR" />
              </div>
              <div class="col-md-6">
                <label class="custom-label">Domicilio</label>
                <input type="text" class="form-control-custom" value="Calle Bugambilias. Colonia Lomas. CDMX." />
              </div>

              <div class="col-md-6">
                <label class="custom-label">Años de experiencia</label>
                <input type="number" class="form-control-custom" value="1" />
              </div>
              <div class="col-md-6">
                <label class="custom-label">Tarifa de consulta</label>
                <input type="text" class="form-control-custom" value="250.00" />
              </div>

           
              <div class="col-12">
                <label class="custom-label">Agrega una descripción de tu trayectoria profesional</label>
                <input type="text" class="form-control-custom" value="Llevo una trayectoria..." />
              </div>

            </div>

         
            <div class="form-actions">
              <button type="button" class="btn btn-cancel">Cancelar</button>
              <button type="submit" class="btn btn-save">Guardar cambios</button>
            </div>
          </form>

        </div>

      </main>
    </div>
  </div>

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>