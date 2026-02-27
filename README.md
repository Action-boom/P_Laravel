# catalogo-laravel

Este es un proyecto ejemplo de catálogo CRUD construido en Laravel, usando rutas, controladores, migraciones, vistas Blade y control de versiones con Git y GitHub.  
Para tareas educativas y de práctica del patrón MVC.

## Instalación y primeros pasos

1. Clona el repositorio:
git clone https://github.com/krosty1722/catalogo-laravel.git cd catalogo-laravel

2. Instala dependencias:
composer install

3. Crea el archivo de base de datos y configura `.env`:
copy .env.example .env type nul > database\database.sqlite

Edita en el archivo `.env`:
DB_CONNECTION=sqlite DB_DATABASE=database/database.sqlite

4. Genera la clave:
php artisan key:generate

5. Ejecuta las migraciones:
php artisan migrate

6. Sirve la aplicación en modo desarrollo:
php artisan serve

Y abre [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

- Puedes agregar tu nombre, descripción u objetivos de la práctica.

