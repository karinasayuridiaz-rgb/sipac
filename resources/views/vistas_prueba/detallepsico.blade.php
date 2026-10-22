<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Detalle de Psicólogo SIPAC" />
  <title>Detalle del Psicólogo - SIPAC</title>
  
  <link href= "{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href= "{{ asset('css/dashboard.css') }}" rel="stylesheet" />
  <link href=  "{{ asset('css/globalstyles.css') }}" rel="stylesheet" />
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
      letter-spacing: -0.5px;
      flex-shrink: 0;
    }

     
    .custom-card {
      background: #ffffff;
      border: 1px solid #edf2f7;
      border-radius: 1.25rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
    }

    
    .profile-placeholder-large {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      background-color: #e2e8f0;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.25rem auto;  
      border: 4px solid #ffffff;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      color: #94a3b8;  
      font-size: 3.5rem;
    }

    .badge-custom {
      padding: 0.4rem 0.85rem;
      border-radius: 20px;
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.3px;
    }

    .badge-role {
      background-color: #eff6ff;
      color: #2563eb;
    }

    .badge-status {
      background-color: #f0fdf4;
      color: #16a34a;
    }

    .stats-container {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 1.8rem 0;
      padding: 1.2rem 0;
      border-top: 1px solid #f1f5f9;
      border-bottom: 1px solid #f1f5f9;
    }

    .stat-box {
      flex: 1;
      text-align: center;
    }

    .stat-divider {
      width: 1px;
      height: 35px;
      background-color: #e2e8f0;
    }

    .stat-number {
      font-size: 1.4rem;
      font-weight: 700;
      color: var(--teal-primary);
      line-height: 1;
      margin-bottom: 0.3rem;
    }

    .stat-label {
      font-size: 0.72rem;
      color: #64748b;
      font-weight: 500;
    }

    .btn-outline-edit {
      border: 1px solid var(--teal-primary);
      color: var(--teal-primary);
      font-weight: 600;
      border-radius: 0.5rem;
      padding: 0.6rem;
      width: 100%;
      transition: all 0.2s;
    }

    .btn-outline-edit:hover {
      background-color: var(--teal-primary);
      color: #ffffff;
    }

    .btn-outline-delete {
      border: 1px solid #ef4444;
      color: #ef4444;
      font-weight: 600;
      border-radius: 0.5rem;
      padding: 0.6rem;
      width: 100%;
      transition: all 0.2s;
    }

    .btn-outline-delete:hover {
      background-color: #ef4444;
      color: #ffffff;
    }
 
    .detail-row {
      padding-bottom: 1.25rem;
      margin-bottom: 1.25rem;
      border-bottom: 1px solid #f1f5f9;
    }

    .detail-row:last-child {
      border-bottom: none;
      margin-bottom: 0;
      padding-bottom: 0;
    }

    .detail-label {
      font-size: 0.7rem;
      font-weight: 600;
      color: #94a3b8;
      text-transform: uppercase;
      letter-spacing: 0.6px;
      margin-bottom: 0.4rem;
    }

    .detail-value {
      font-size: 0.95rem;
      font-weight: 500;
      color: #1e293b;
    }

    .detail-value.specialty {
      color: var(--teal-primary);
      font-weight: 600;
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
          <h1 class="h4 mb-0 fw-bold text-dark">Detalle del Psicólogo</h1>
          <div class="profile-section">
            <div class="profile-badge-avatar">AD</div>
            <div class="d-flex flex-column lh-1">
              <span class="fw-bold text-dark" style="font-size: 0.95rem;">Administrador</span>
              <span class="text-muted" style="font-size: 0.8rem;">Perfil</span>
            </div>
          </div>
        </div>

      
        <div class="row gx-4 mb-5">
          
      
          <div class="col-xl-4 col-lg-5 mb-4 mb-lg-0">
            <div class="custom-card p-4 text-center h-100 d-flex flex-column">
              
     
              <div class="mt-2">
               
                <div class="profile-placeholder-large">
                  <i class="bi bi-person"></i>
                </div>

                <h4 class="fw-bold text-dark mb-1">Dr. Carlos Mendoza</h4>
                <p class="text-muted mb-3" style="font-size: 0.9rem;">CarlosMz</p>
                
                <div class="d-flex justify-content-center gap-2 mb-2">
                  <span class="badge-custom badge-role">Psicólogo</span>
                  <span class="badge-custom badge-status">Activo</span>
                </div>
              </div>

            
              <div class="stats-container">
                <div class="stat-box">
                  <div class="stat-number">42</div>
                  <div class="stat-label">Citas Totales</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-box">
                  <div class="stat-number">39</div>
                  <div class="stat-label">Sesiones Totales</div>
                </div>
              </div>

           
              <div class="mt-auto px-2 pb-2">
                <button class="btn btn-outline-edit mb-3">
                  <i class="bi bi-pencil-square me-2"></i>Editar Perfil
                </button>
                <button class="btn btn-outline-delete">
                  <i class="bi bi-trash me-2"></i>Eliminar Cuenta
                </button>
              </div>

            </div>
          </div>

         
          <div class="col-xl-8 col-lg-7">
            <div class="custom-card p-4 p-md-5 h-100">
              <h5 class="fw-bold text-dark mb-4 pb-2">Expediente Personal & Profesional</h5>
              

              <div class="row detail-row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="detail-label">Correo electrónico</div>
                  <div class="detail-value">carlos.mendoza@psicogestion.com</div>
                </div>
                <div class="col-md-6">
                  <div class="detail-label">Teléfono de contacto</div>
                  <div class="detail-value">5588374683</div>
                </div>
              </div>

   
              <div class="row detail-row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="detail-label">Fecha de registro</div>
                  <div class="detail-value">12 de Marzo, 2022</div>
                </div>
                <div class="col-md-6">
                  <div class="detail-label">CURP</div>
                  <div class="detail-value">CATH254856HMMJJA4</div>
                </div>
              </div>


              <div class="row detail-row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="detail-label">Domicilio</div>
                  <div class="detail-value">CALLE BUGAMBILIAS, CDMX, C.P. 56888</div>
                </div>
                <div class="col-md-6">
                  <div class="detail-label">Número de licencia (Cédula profesional)</div>
                  <div class="detail-value">L-36FHGSSWE-5</div>
                </div>
              </div>

      
              <div class="row detail-row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="detail-label">Tarifa de consulta</div>
                  <div class="detail-value">80.50 MXN</div>
                </div>
                <div class="col-md-6">
                  <div class="detail-label">Años de experiencia</div>
                  <div class="detail-value">2 AÑOS</div>
                </div>
              </div>

            
              <div class="row detail-row">
                <div class="col-12">
                  <div class="detail-label">Especialidad Médica</div>
                  <div class="detail-value specialty">Ansiedad / Depresión / Terapia de pareja / Adolescentes / Duelo / Adicciones</div>
                </div>
              </div>

         
              <div class="row detail-row">
                <div class="col-12">
                  <div class="detail-label">Trayectoria profesional</div>
                  <div class="detail-value">Llevo 10 años de experiencia...</div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </main>
    </div>
  </div>

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>