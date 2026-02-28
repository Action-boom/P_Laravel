# Proyecto php en Laravel

Aplicación web CRUD desarrollada con **Laravel** como ejercicio educativo. El proyecto implementa funcionalidades de gestión de productos utilizando rutas, controladores, migraciones a bases de datos y plantillas Blade, integrándose completamente con Git y GitHub.

## Configuración Inicial

### Requisitos previos
- PHP 8.1
- Composer
- Git

### Pasos de instalación

**1. Descargar el proyecto:**
```bash
git clone https://github.com/Action-boom/P_Laravel.git
cd P_Laravel
```

**2. Instalar dependencias de PHP:**
```bash
composer install
```

**3. Preparar la base de datos:**
```bash
copy .env.example .env
type nul > database\database.sqlite
```

Luego, configura el archivo `.env`:
```
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

**4. Generar clave de aplicación:**
```bash
php artisan key:generate
```

**5. Ejecutar migraciones:**
```bash
php artisan migrate
```

**6. Iniciar servidor:**
```bash
php artisan serve
```

Accede a la aplicación en: [http://127.0.0.1:8000](http://127.0.0.1:8000)


