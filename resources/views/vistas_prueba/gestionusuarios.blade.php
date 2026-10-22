<!doctype html>
<html lang="es" data-bs-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Gestión de Usuarios SIPAC" />
  <title>Gestión de usuarios · SIPAC</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <style>
    :root {
      --main-red: #9d2426;
      --bg-light-gray: #f9fafb;
    }

    body {
      background-color: var(--bg-light-gray);
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }


    .sidebar {
      min-height: 100vh;
      background-color: #ffffff;
      border-right: 1px solid #e5e7eb;
      display: flex;
      flex-direction: column;
      position: sticky;
      top: 0;
    }

    .brand-logo {
      color: #991B1B;
      font-weight: 700;
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      padding: 1.5rem 1rem;
      text-decoration: none;
    }

    .brand-logo i {
      color: var(--main-red);
    }

    .sidebar .nav-link {
      color: #4b5563;
      font-weight: 500;
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      transition: all 0.2s ease-in-out;
    }

    .sidebar .nav-link:hover:not(.active) {
      background-color: #f3f4f6;
      color: #111827;
    }

    .sidebar .nav-link i {
      font-size: 1.1rem;
      color: #6b7280;
    }

    .sidebar .nav-link.active {
      background-color: var(--main-red);
      color: #ffffff;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .sidebar .nav-link.active i {
      color: #ffffff;
    }

    .logout-btn {
      color: #dc2626 !important;
      margin-top: auto;
      margin-bottom: 1rem;
    }

    .logout-btn i {
      color: #dc2626 !important;
    }

    .logout-btn:hover {
      background-color: #fef2f2 !important;
    }


    .top-header {
      padding: 1.5rem 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
      border-bottom: 1px solid #e5e7eb;
    }

    .profile-section {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    
    .avatar-circle {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #fce883; 
      color: #000;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-size: 1rem;
      object-fit: cover;
    }

   
    .btn-custom-red {
      background-color: var(--main-red) !important;
      color: white !important;
      font-weight: 500;
      border: none;
    }

    .btn-custom-red:hover {
      background-color: #7a1b1d !important;
    }

    .table-card {
      border: 1px solid #e5e7eb;
      border-radius: 0.5rem;
      background-color: #fff;
      box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }

    .table-custom thead th {
      border-bottom: 1px solid #e5e7eb;
      color: #6b7280;
      font-weight: 600;
      font-size: 0.85rem;
      padding: 1rem 1.5rem;
    }

    .table-custom td {
      padding: 1.25rem 1.5rem;
      vertical-align: middle;
      font-size: 0.9rem;
      color: #374151;
      border-bottom: 1px solid #f3f4f6;
    }
    
    .table-custom tr:last-child td {
      border-bottom: none;
    }

    .status-badge {
      padding: 0.35em 0.85em;
      font-size: 0.75rem;
      font-weight: 600;
      border-radius: 50rem;
    }
    .badge-activo { background-color: #dcfce7; color: #16a34a; }
    .badge-inactivo { background-color: #fee2e2; color: #dc2626; }
    .badge-psicologo { background-color: #e0e7ff; color: #4f46e5; }
    .badge-paciente { background-color: #f3f4f6; color: #4b5563; }
    
    .mini-avatar {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background-color: #f3f4f6;
      display: inline-block;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      
     
      <nav class="col-md-3 col-lg-2 d-none d-md-flex px-3 sidebar position-fixed h-100">
        <a href="#" class="brand-logo mb-4">
          <i class="bi bi-heart-pulse-fill"></i>
          SIPAC
        </a>
        
        <ul class="nav flex-column mb-auto w-100">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-house"></i> Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="bi bi-people-fill"></i> Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-person-plus"></i> Registrar Psicólogo
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-person-plus"></i> Registrar Paciente
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
      </nav>

      
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 offset-md-3 offset-lg-2">
        
        <div class="top-header">
          <h1 class="h3 fw-bold text-dark m-0">Gestión de Usuarios</h1>
          
          <div class="profile-section">
            <div class="avatar-circle shadow-sm">
              <img src="https://ui-avatars.com/api/?name=Admin&background=random" alt="Avatar" class="w-100 h-100 rounded-circle">
            </div>
            <div class="d-flex flex-column lh-sm text-start">
              <span class="fw-bold text-dark" style="font-size: 0.95rem;">Administrador</span>
              <span class="text-secondary" style="font-size: 0.8rem;">Perfil</span>
            </div>
          </div>
        </div>

      
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <h2 class="h5 fw-bold mb-1 text-dark">Listado de Usuarios Registrados</h2>
            <p class="text-secondary mb-0 small">Administra cuentas de psicólogos y pacientes.</p>
          </div>
          <button class="btn btn-custom-red px-4 py-2 rounded-3 shadow-sm d-flex align-items-center gap-2">
            <i class="bi bi-plus-lg text-white"></i> Registrar Usuario
          </button>
        </div>

        
        <div class="p-3 mb-4 bg-white rounded-3 shadow-sm border border-light">
          <div class="row g-3 align-items-center">
            <div class="col-md-5">
              <div class="input-group">
                <span class="input-group-text bg-white text-secondary border-end-0">
                  <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control border-start-0 ps-0" placeholder="Buscar por nombre o email...">
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group">
                <span class="input-group-text bg-white text-secondary border-end-0 small">Rol:</span>
                <select class="form-select border-start-0 text-secondary ps-0">
                  <option value="psicologo">Psicólogo</option>
                  <option value="paciente">Paciente</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="input-group">
                <span class="input-group-text bg-white text-secondary border-end-0 small">Estado:</span>
                <select class="form-select border-start-0 text-secondary ps-0">
                  <option value="activo">Activo</option>
                  <option value="inactivo">Inactivo</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <button class="btn btn-custom-red w-100 shadow-sm fw-bold">Buscar</button>
            </div>
          </div>
        </div>

    
        <div class="table-card mb-5">
          <div class="table-responsive">
            <table class="table table-custom align-middle mb-0">
              <thead>
                <tr>
                  <th scope="col" style="width: 80px;">Avatar</th>
                  <th scope="col">Nombre Completo</th>
                  <th scope="col">Email</th>
                  <th scope="col" class="text-center">Rol</th>
                  <th scope="col" class="text-center">Estado</th>
                  <th scope="col" class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><div class="mini-avatar"></div></td>
                  <td class="fw-bold">Dr. Carlos Mendoza</td>
                  <td class="text-secondary">carlos@psicogestion.com</td>
                  <td class="text-center"><span class="status-badge badge-psicologo">Psicólogo</span></td>
                  <td class="text-center"><span class="status-badge badge-activo">Activo</span></td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-light text-secondary me-1"><i class="bi bi-eye-fill"></i></button>
                    <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash-fill"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><div class="mini-avatar"></div></td>
                  <td class="fw-bold">Sofía Martínez</td>
                  <td class="text-secondary">sofia.m@gmail.com</td>
                  <td class="text-center"><span class="status-badge badge-paciente">Paciente</span></td>
                  <td class="text-center"><span class="status-badge badge-activo">Activo</span></td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-light text-secondary me-1"><i class="bi bi-eye-fill"></i></button>
                    <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash-fill"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><div class="mini-avatar"></div></td>
                  <td class="fw-bold">Dra. Lucía Torres</td>
                  <td class="text-secondary">lucia@psicogestion.com</td>
                  <td class="text-center"><span class="status-badge badge-psicologo">Psicólogo</span></td>
                  <td class="text-center"><span class="status-badge badge-inactivo">Inactivo</span></td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-light text-secondary me-1"><i class="bi bi-eye-fill"></i></button>
                    <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash-fill"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><div class="mini-avatar"></div></td>
                  <td class="fw-bold">Mateo Díaz</td>
                  <td class="text-secondary">mateo.diaz@gmail.com</td>
                  <td class="text-center"><span class="status-badge badge-psicologo">Paciente</span></td>
                  <td class="text-center"><span class="status-badge badge-inactivo">Activo</span></td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-light text-secondary me-1"><i class="bi bi-eye-fill"></i></button>
                    <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash-fill"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><div class="mini-avatar"></div></td>
                  <td class="fw-bold">Fernanda Gómez</td>
                  <td class="text-secondary">fer.gomez@gmail.com</td>
                  <td class="text-center"><span class="status-badge badge-psicologo">Pacienre</span></td>
                  <td class="text-center"><span class="status-badge badge-inactivo">Inactivo</span></td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-light text-secondary me-1"><i class="bi bi-eye-fill"></i></button>
                    <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash-fill"></i></button>
                  </td>
                </tr>
                <tr>
                  <td><div class="mini-avatar"></div></td>
                  <td class="fw-bold">Andrés Castro</td>
                  <td class="text-secondary">andres@gmail.com</td>
                  <td class="text-center"><span class="status-badge badge-psicologo">Paciente</span></td>
                  <td class="text-center"><span class="status-badge badge-inactivo">Activo</span></td>
                  <td class="text-center">
                    <button class="btn btn-sm btn-light text-secondary me-1"><i class="bi bi-eye-fill"></i></button>
                    <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash-fill"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-between align-items-center p-3 border-top">
            <span class="text-secondary small">Mostrando 1 a 6 de 128 usuarios</span>
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary px-3 bg-white">Anterior</button>
              <button type="button" class="btn btn-sm btn-outline-secondary px-3 bg-white">Siguiente</button>
            </div>
          </div>
        </div>

      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>