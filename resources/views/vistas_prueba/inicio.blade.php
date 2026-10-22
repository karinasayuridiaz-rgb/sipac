<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Dashboard SIPAC" />
  <title>Dashboard SIPAC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    :root {
      --main-red: #a41b1b;
      --bg-light-gray: #f8fafc;
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
    
    .sidebar .nav-link {
      color: #64748b;
      font-weight: 500;
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      transition: all 0.2s ease-in-out;
    }

    
    .sidebar .nav-link:hover {
      background-color: #f1f5f9;
      color: #0f172a;
    }

  
    .sidebar .nav-link.active {
      background-color: var(--main-red);
      color: #ffffff;
    }
    
   
    .sidebar .nav-link.active:hover {
      color: #ffffff;
    }

    .sidebar .nav-link i {
      font-size: 1.1rem;
    }

    .brand-logo {
      color: var(--main-red);
      font-weight: 700;
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      padding: 1.5rem 1rem;
      text-decoration: none;
    }

    .logout-btn {
      color: #dc2626 !important;
      margin-top: auto;
      margin-bottom: 1rem;
    }

    .logout-btn:hover {
      background-color: #fef2f2 !important;
      color: #dc2626 !important;
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
      border-radius: 0.75rem;
      box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }

    .table-title {
      font-size: 1rem;
      font-weight: 700;
      color: #1e293b;
      margin-bottom: 1.5rem;
    }

    .custom-table th {
      color: #64748b;
      font-weight: 600;
      font-size: 0.875rem;
      border-bottom: 1px solid #e2e8f0;
      padding-bottom: 0.75rem;
    }

    .custom-table td {
      vertical-align: middle;
      font-size: 0.875rem;
      color: #334155;
      border-bottom: 1px solid #f1f5f9;
      padding: 1rem 0.5rem;
    }

    .custom-table tr:last-child td {
      border-bottom: none;
    }

    .avatar-placeholder {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background-color: #f1f5f9;
      display: inline-block;
      flex-shrink: 0;
    }

    .status-badge {
      padding: 0.35em 0.85em;
      font-size: 0.75rem;
      font-weight: 600;
      border-radius: 50rem;
    }

    .badge-activo { background-color: #dcfce7; color: #16a34a; }
    .badge-inactivo { background-color: #fee2e2; color: #dc2626; }
    .badge-programada { background-color: #fef3c7; color: #d97706; }
    .badge-inasistencia { background-color: #e0e7ff; color: #4f46e5; }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
    
      <div class="col-md-3 col-lg-2 px-3 sidebar d-none d-md-flex position-fixed">
        <a href="#" class="brand-logo mb-4">
          <i class="bi bi-heart-pulse-fill"></i>
          SIPAC
        </a>
        
        <ul class="nav flex-column mb-auto w-100">
          <li class="nav-item">
            
            <a class="nav-link active" aria-current="page" href="#">
              <i class="bi bi-house"></i> Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-people"></i> Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-person-add"></i> Registrar Psicólogo
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-person-add"></i> Registrar Paciente
            </a>
          </li>
        </ul>

        <ul class="nav flex-column w-100 mt-auto">
          <li class="nav-item border-top pt-3">
            <a class="nav-link logout-btn" href="#">
              <i class="bi bi-box-arrow-left"></i> Cerrar Sesión
            </a>
          </li>
        </ul>
      </div>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 offset-md-3 offset-lg-2">
        
 
        <div class="top-header">
          <h1 class="h3 mb-0 fw-bold text-dark">Inicio</h1>
          <div class="profile-section">
         
            <img src="https://ui-avatars.com/api/?name=Admin&background=random" alt="Avatar" class="profile-avatar">
            <div class="d-flex flex-column lh-1">
              <span class="fw-bold text-dark" style="font-size: 0.9rem;">Administrador</span>
              <span class="text-muted" style="font-size: 0.8rem;">Perfil</span>
            </div>
          </div>
        </div>

  
        <div class="d-flex justify-content-between align-items-center p-4 mb-4 rounded-4 shadow-sm" style="background-color: var(--main-red); color: white;">
          <h2 class="m-0 fw-bold fs-4">¡Bienvenido de nuevo, Administrador!</h2>
          <div class="bg-white rounded-circle d-flex justify-content-center align-items-center shadow-sm" style="width: 48px; height: 48px; color: var(--main-red);">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
            </svg>
          </div>
        </div>
         
 
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
  
          <div class="col">
            <div class="card h-100 p-3 custom-card">
              <div class="card-body p-1 d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-muted fw-semibold mb-1" style="font-size: 0.9rem;">Usuarios Totales</p>
                  <h3 class="fw-bold mb-1" style="color: #1e293b; font-size: 2rem;">1,248</h3>
                  <small class="text-muted" style="font-size: 0.75rem;">+ 12 usuarios nuevos este mes</small>
                </div>
              
                <i class="bi bi-people" style="color: var(--main-red); font-size: 1.75rem;"></i>
              </div>
            </div>
          </div>
          

          <div class="col">
            <div class="card h-100 p-3 custom-card">
              <div class="card-body p-1 d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-muted fw-semibold mb-1" style="font-size: 0.9rem;">Usuarios Activos</p>
                  <h3 class="fw-bold mb-1" style="color: #1e293b; font-size: 2rem;">982</h3>
                  <small class="text-muted" style="font-size: 0.75rem;">92% de la base total</small>
                </div>
                
                <i class="bi bi-person-check" style="color: #16a34a; font-size: 1.75rem;"></i>
              </div>
            </div>
          </div>
          
         
          <div class="col">
            <div class="card h-100 p-3 custom-card">
              <div class="card-body p-1 d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-muted fw-semibold mb-1" style="font-size: 0.9rem;">Usuarios Inactivos</p>
                  <h3 class="fw-bold mb-1" style="color: #1e293b; font-size: 2rem;">266</h3>
                  <small class="text-muted" style="font-size: 0.75rem;">18% de la base total</small>
                </div>
             
                <i class="bi bi-person-dash" style="color: #d97706; font-size: 1.75rem;"></i>
              </div>
            </div>
          </div>
        </div>

     
        <div class="row g-4 mb-5">
         
          <div class="col-lg-6">
            <div class="custom-card p-4 h-100">
              <h5 class="table-title">Últimos 5 Usuarios creados</h5>
              <div class="table-responsive">
                <table class="table custom-table table-borderless align-middle mb-0">
                  <thead>
                    <tr>
                      <th scope="col" colspan="2">Avatar Nombre</th>
                      <th scope="col">Rol</th>
                      <th scope="col">Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="width: 40px;"><div class="avatar-placeholder"></div></td>
                      <td>
                        <div class="fw-bold text-dark">Dr. Carlos Mendoza</div>
                        <div class="text-muted" style="font-size: 0.75rem;">carlos@psicogestion.com</div>
                      </td>
                      <td>Psicólogo</td>
                      <td><span class="status-badge badge-activo">Activo</span></td>
                    </tr>
                    <tr>
                      <td><div class="avatar-placeholder"></div></td>
                      <td>
                        <div class="fw-bold text-dark">Sofia Martínez</div>
                        <div class="text-muted" style="font-size: 0.75rem;">sofia.m@gmail.com</div>
                      </td>
                      <td>Paciente</td>
                      <td><span class="status-badge badge-activo">Activo</span></td>
                    </tr>
                    <tr>
                      <td><div class="avatar-placeholder"></div></td>
                      <td>
                        <div class="fw-bold text-dark">Dra. Lucía Torres</div>
                        <div class="text-muted" style="font-size: 0.75rem;">lucia@psicogestion.com</div>
                      </td>
                      <td>Psicólogo</td>
                      <td><span class="status-badge badge-inactivo">Inactivo</span></td>
                    </tr>
                    <tr>
                      <td><div class="avatar-placeholder"></div></td>
                      <td>
                        <div class="fw-bold text-dark">Mateo Díaz</div>
                        <div class="text-muted" style="font-size: 0.75rem;">mateo.diaz@gmail.com</div>
                      </td>
                      <td>Paciente</td>
                      <td><span class="status-badge badge-activo">Activo</span></td>
                    </tr>
                    <tr>
                      <td><div class="avatar-placeholder"></div></td>
                      <td>
                        <div class="fw-bold text-dark">Fernanda Gómez</div>
                        <div class="text-muted" style="font-size: 0.75rem;">fer.gomez@gmail.com</div>
                      </td>
                      <td>Paciente</td>
                      <td><span class="status-badge badge-inactivo">Inactivo</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

         
          <div class="col-lg-6">
            <div class="custom-card p-4 h-100">
              <h5 class="table-title">Últimas 5 Citas registradas</h5>
              <div class="table-responsive">
                <table class="table custom-table table-borderless align-middle mb-0">
                  <thead>
                    <tr>
                      <th scope="col">Paciente</th>
                      <th scope="col">Psicólogo</th>
                      <th scope="col">Fecha/Hora</th>
                      <th scope="col">Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="fw-bold text-dark">Sofia Martínez</td>
                      <td class="text-muted">Dr. Carlos Mendoza</td>
                      <td>
                        <div class="fw-bold text-dark" style="font-size: 0.8rem;">24 Oct</div>
                        <div class="text-muted" style="font-size: 0.75rem;">10:00 AM</div>
                      </td>
                      <td><span class="status-badge badge-activo">Completada</span></td>
                    </tr>
                    <tr>
                      <td class="fw-bold text-dark">Mateo Díaz</td>
                      <td class="text-muted">Dr. Carlos Mendoza</td>
                      <td>
                        <div class="fw-bold text-dark" style="font-size: 0.8rem;">24 Oct</div>
                        <div class="text-muted" style="font-size: 0.75rem;">11:30 AM</div>
                      </td>
                      <td><span class="status-badge badge-activo">Completada</span></td>
                    </tr>
                    <tr>
                      <td class="fw-bold text-dark">Andrés Castro</td>
                      <td class="text-muted">Dra. Lucía Torres</td>
                      <td>
                        <div class="fw-bold text-dark" style="font-size: 0.8rem;">25 Oct</div>
                        <div class="text-muted" style="font-size: 0.75rem;">09:00 AM</div>
                      </td>
                      <td><span class="status-badge badge-programada">Programada</span></td>
                    </tr>
                    <tr>
                      <td class="fw-bold text-dark">Valeria Ruiz</td>
                      <td class="text-muted">Dra. Lucía Torres</td>
                      <td>
                        <div class="fw-bold text-dark" style="font-size: 0.8rem;">25 Oct</div>
                        <div class="text-muted" style="font-size: 0.75rem;">03:00 PM</div>
                      </td>
                      <td><span class="status-badge badge-inactivo">Cancelada</span></td>
                    </tr>
                    <tr>
                      <td class="fw-bold text-dark">Clara Soto</td>
                      <td class="text-muted">Dr. Carlos Mendoza</td>
                      <td>
                        <div class="fw-bold text-dark" style="font-size: 0.8rem;">26 Oct</div>
                        <div class="text-muted" style="font-size: 0.75rem;">04:30 PM</div>
                      </td>
                      <td><span class="status-badge badge-inasistencia">Inasistencia</span></td>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>