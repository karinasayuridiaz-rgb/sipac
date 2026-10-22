<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Detalle de Paciente SIPAC" />
  <title>Detalle del Paciente - SIPAC</title>
  
  <link href= "{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href= "{{ asset('css/dashboard.css') }}" rel="stylesheet" />
  <link href= "{{ asset('css/globalstyles.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  <style>
    :root {
      --main-red: #8B181B;
      --main-red-hover: #731316;
      --bg-light-gray: #f8fafc;
      --sidebar-gray: #475569;
      --teal-primary: #0d9488;
    }

    body {
      background-color: var(--bg-light-gray);
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      color: #1e293b;
    }

  
    .sidebar {
      min-height: 100vh;
      background-color: #ffffff;
      border-right: 1px solid #e2e8f0;
      display: flex;
      flex-direction: column;
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
      line-height: 1;
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
      margin-bottom: 1rem;
    }

    .profile-section {
      display: flex;
      align-items: center;
      gap: 0.75rem;
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
      flex-shrink: 0;
    }

     
    .custom-card {
      background: #ffffff;
      border: 1px solid #edf2f7;
      border-radius: 1.25rem;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
      padding: 1.75rem;
    }

 
    .profile-placeholder-large {
      width: 110px;
      height: 110px;
      border-radius: 50%;
      background-color: #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0.5rem auto 1.25rem auto;
      border: 3px solid #ffffff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
      color: #94a3b8;
      font-size: 3rem;
    }

    .badge-custom {
      padding: 0.35rem 0.85rem;
      border-radius: 20px;
      font-size: 0.75rem;
      font-weight: 600;
    }

    .badge-role {
      background-color: #f1f5f9;
      color: #64748b;
    }

    .badge-status-active {
      background-color: #ecfdf5;
      color: #10b981;
    }

    .stats-container {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 1.5rem 0;
      padding: 1rem 0;
      border-top: 1px solid #f1f5f9;
      border-bottom: 1px solid #f1f5f9;
    }

    .stat-box {
      flex: 1;
      text-align: center;
    }

    .stat-divider {
      width: 1px;
      height: 32px;
      background-color: #e2e8f0;
    }

    .stat-number {
      font-size: 1.25rem;
      font-weight: 700;
      color: #0f172a;
      line-height: 1.1;
    }

    .stat-label {
      font-size: 0.72rem;
      color: #94a3b8;
      font-weight: 500;
      margin-top: 0.2rem;
    }

    .btn-action-edit {
      border: 1px solid #0d9488;
      color: #0d9488;
      background-color: #ffffff;
      font-weight: 600;
      font-size: 0.88rem;
      border-radius: 0.6rem;
      padding: 0.55rem;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.4rem;
      transition: all 0.2s;
    }

    .btn-action-edit:hover {
      background-color: #0d9488;
      color: #ffffff;
    }

    .btn-action-delete {
      border: 1px solid #fca5a5;
      color: #ef4444;
      background-color: #ffffff;
      font-weight: 600;
      font-size: 0.88rem;
      border-radius: 0.6rem;
      padding: 0.55rem;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.4rem;
      transition: all 0.2s;
    }

    .btn-action-delete:hover {
      background-color: #ef4444;
      color: #ffffff;
      border-color: #ef4444;
    }

     
    .field-label {
      font-size: 0.72rem;
      font-weight: 500;
      color: #94a3b8;
      margin-bottom: 0.25rem;
    }

    .field-value {
      font-size: 0.9rem;
      font-weight: 600;
      color: #1e293b;
    }

    .section-title {
      font-size: 1.05rem;
      font-weight: 700;
      color: #0f172a;
      margin-bottom: 1.25rem;
    }

 
    .custom-table {
      width: 100%;
      border-collapse: collapse;
    }

    .custom-table th {
      font-size: 0.75rem;
      font-weight: 600;
      color: #64748b;
      padding: 0.6rem 0.5rem;
      border-bottom: 1px solid #f1f5f9;
    }

    .custom-table td {
      font-size: 0.85rem;
      font-weight: 500;
      color: #1e293b;
      padding: 0.8rem 0.5rem;
      vertical-align: middle;
      border-bottom: 1px solid #f8fafc;
    }

    .custom-table tr:last-child td {
      border-bottom: none;
    }

    
    .badge-pill-status {
      font-size: 0.72rem;
      font-weight: 600;
      padding: 0.25rem 0.65rem;
      border-radius: 20px;
      display: inline-block;
    }

    .badge-pill-completed {
      background-color: #ecfdf5;
      color: #10b981;
    }

    .badge-pill-scheduled {
      background-color: #fef3c7;
      color: #d97706;
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

      
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 offset-md-3 offset-lg-2">
        
     
        <div class="top-header">
          <h1 class="h4 mb-0 fw-bold text-dark">Detalle del Paciente</h1>
          <div class="profile-section">
            <div class="profile-badge-avatar">AD</div>
            <div class="d-flex flex-column lh-1">
              <span class="fw-bold text-dark" style="font-size: 0.95rem;">Administrador</span>
              <span class="text-muted" style="font-size: 0.8rem;">Perfil</span>
            </div>
          </div>
        </div>

        
        <div class="row gx-4 mb-5 align-items-start">
          
           
          <div class="col-xl-4 col-lg-5 mb-4">
            <div class="custom-card text-center">
              
              
              <div class="profile-placeholder-large">
                <i class="bi bi-person"></i>
              </div>

              <h5 class="fw-bold text-dark mb-1">Sayuri Díaz Martínez</h5>
              <p class="text-muted mb-3" style="font-size: 0.85rem;">Moonlleex</p>
              
              <div class="d-flex justify-content-center gap-2 mb-2">
                <span class="badge-custom badge-role">Paciente</span>
                <span class="badge-custom badge-status-active">Activo</span>
              </div>

               
              <div class="stats-container">
                <div class="stat-box">
                  <div class="stat-number">12</div>
                  <div class="stat-label">Citas Totales</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-box">
                  <div class="stat-number">24 Oct</div>
                  <div class="stat-label">Última Cita</div>
                </div>
              </div>

               
              <div class="d-flex flex-column gap-2 pt-1">
                <button class="btn btn-action-edit">
                  <i class="bi bi-pencil-square"></i>
                  <span>Editar Perfil</span>
                </button>
                <button class="btn btn-action-delete">
                  <i class="bi bi-trash"></i>
                  <span>Eliminar Cuenta</span>
                </button>
              </div>

            </div>
          </div>

          
          <div class="col-xl-8 col-lg-7 d-flex flex-column gap-4">
            
     
            <div class="custom-card">
              <h5 class="section-title">Datos Personales</h5>
              
              <div class="row gy-3">
                <div class="col-sm-6">
                  <div class="field-label">Correo Electrónico</div>
                  <div class="field-value">sofia.m@gmail.com</div>
                </div>
                <div class="col-sm-6">
                  <div class="field-label">Teléfono</div>
                  <div class="field-value">558837468</div>
                </div>

                <div class="col-sm-6">
                  <div class="field-label">Fecha de Nacimiento</div>
                  <div class="field-value">14 de Abril de 1995</div>
                </div>
                <div class="col-sm-6">
                  <div class="field-label">Género</div>
                  <div class="field-value">Femenino</div>
                </div>

                <div class="col-sm-6">
                  <div class="field-label">Domicilio</div>
                  <div class="field-value">Calle 45 #12-89, Bogotá</div>
                </div>
                <div class="col-sm-6">
                  <div class="field-label">CURP</div>
                  <div class="field-value">CAHTG032524HMCRRRA6</div>
                </div>
              </div>
            </div>

             
            <div class="custom-card">
              <h5 class="section-title">Contactos de Emergencia</h5>
              <div class="table-responsive">
                <table class="custom-table">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Parentesco</th>
                      <th>Número</th>
                      <th>Correo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="fw-semibold">Juan Manuel Díaz</td>
                      <td>Padre</td>
                      <td>5588375896</td>
                      <td>juanmd@gmail.com</td>
                    </tr>
                    <tr>
                      <td class="fw-semibold">Luisa Martínez</td>
                      <td>Madre</td>
                      <td>5569863214</td>
                      <td>Ninguno</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

             
            <div class="custom-card">
              <h5 class="section-title">Últimas 5 Citas Programadas</h5>
              <div class="table-responsive">
                <table class="custom-table">
                  <thead>
                    <tr>
                      <th>Fecha</th>
                      <th>Hora</th>
                      <th>Psicólogo</th>
                      <th class="text-end">Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>24 Oct 2026</td>
                      <td>10:00 AM</td>
                      <td>Dr. Jose Luis Romo</td>
                      <td class="text-end">
                        <span class="badge-pill-status badge-pill-completed">Completada</span>
                      </td>
                    </tr>
                    <tr>
                      <td>10 Nov 2026</td>
                      <td>11:30 AM</td>
                      <td>Dr. Jose Luis Romo</td>
                      <td class="text-end">
                        <span class="badge-pill-status badge-pill-scheduled">Programada</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>

        </div>

      </main>
    </div>
  </div>

  <script src= "{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>