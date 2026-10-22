# SIPAC — Sistema de Atención Psicológica Comunitaria

Base de desarrollo en Laravel 12 para la Alcaldía Tláhuac. Incluye el modelo de datos inicial, autenticación por CURP, cambio obligatorio de contraseña temporal, control de acceso por roles y las vistas prototipo elaboradas para el proyecto.

## Requisitos

- PHP 8.2 o posterior.
- Composer 2.
- MySQL 8.0.16 o posterior.
- Node.js y npm, si se incorporan recursos con Vite.

## Instalación local

1. Copiar `.env.example` como `.env`.
2. Crear una base de datos vacía llamada `sipac`.
3. Ajustar en `.env` la conexión de MySQL.
4. Ejecutar:

```bash
composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Para crear un administrador de desarrollo, definir antes de ejecutar el seeder:

```dotenv
SIPAC_SEED_ADMIN_CURP=CURP_DE_18_CARACTERES
SIPAC_SEED_ADMIN_PASSWORD=ContraseñaTemporalSegura123
SIPAC_SEED_ADMIN_EMAIL=correo@ejemplo.mx
SIPAC_SEED_ADMIN_FIRST_NAME=Nombre
SIPAC_SEED_ADMIN_LAST_NAME=Apellidos
```

La contraseña se marca como temporal y debe cambiarse durante el primer acceso. Estas variables son únicamente para desarrollo y no deben conservarse en producción.

## Pruebas

```bash
php artisan test
```

Las pruebas utilizan SQLite en memoria y cubren migraciones, acceso por CURP, contraseña temporal, protección de rutas y autorización del módulo de usuarios.

## Roles iniciales

- `ADMINISTRATOR`
- `ADMINISTRATIVE`
- `PSYCHOLOGIST`
- `PATIENT`
- `GUARDIAN`

## Estado actual

La autenticación, el cambio obligatorio de contraseña y la protección de las vistas ya son funcionales. Las pantallas de pacientes, psicólogos y usuarios siguen siendo prototipos visuales; sus operaciones de alta, consulta y modificación deben implementarse mediante controladores, solicitudes de validación, servicios y Policies antes de usar datos reales.

## Seguridad

- No distribuir el archivo `.env`, registros, bases locales ni vistas compiladas.
- Utilizar `APP_DEBUG=false` en producción.
- Configurar HTTPS, SMTP, respaldos y restauración con el Área de Sistemas.
- No usar información clínica ni datos reales hasta aprobar las medidas institucionales de privacidad.
