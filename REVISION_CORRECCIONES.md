# Revisión y correcciones aplicadas

Fecha: 8 de octubre de 2026.

## Corregido

- Rutas que apuntaban a nombres de vistas inexistentes.
- Autenticación mediante CURP y contraseña protegida.
- Límite de intentos de inicio de sesión.
- Cambio obligatorio de contraseña temporal.
- Cierre seguro de sesión.
- Protección de rutas mediante autenticación y roles.
- Modelo `User` alineado con las tablas `people`, `roles` y `users`.
- Modelos `Person` y `Role` y sus relaciones.
- `DatabaseSeeder.php` y creación opcional de administrador local.
- `UserFactory` compatible con el esquema SIPAC.
- Migraciones ejecutables desde una base vacía y compatibles con SQLite para pruebas.
- Configuración de ejemplo para MySQL y entorno en español.
- Pruebas de autenticación y autorización.
- Instrucciones específicas de instalación y seguridad.

## Verificación realizada

- Todos los archivos PHP superaron la validación de sintaxis.
- Todas las vistas Blade compilaron correctamente.
- Las nueve migraciones se ejecutaron desde cero.
- El seeder de roles se ejecutó correctamente.
- Siete pruebas automatizadas, con dieciocho aserciones, finalizaron correctamente.

## Trabajo pendiente de desarrollo

Las vistas de pacientes, psicólogos y usuarios continúan como prototipos. Falta desarrollar controladores, Form Requests, servicios, Policies y pruebas para:

- Gestión de cuentas, pacientes, tutoras y psicólogos.
- Asignaciones psicólogo–paciente.
- Centros y disponibilidad.
- Solicitud, programación, confirmación, cancelación y reprogramación de citas.
- Historial básico de atención.
- Notificaciones por correo.
- Bitácora y política de conservación.

Estas operaciones no deben conectarse a datos reales hasta validar infraestructura, privacidad, respaldos y restauración con la Alcaldía.
