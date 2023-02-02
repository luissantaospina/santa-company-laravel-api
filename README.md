# AveonlineApi
Esta aplicación está construida con laravel.

Está implementa protección de rutas bajo el esquema de jwt (https://jwt.io/), esto permite tener seguridad de punta a punta respecto a toda la comunicación que ingresa en esta.
En la aplicación se combina los patrones de arquitectura MVC (Modelo vista controlador), DTO (Data Transfer Object), fachada y SOLID (Single responsibility, Open-closed, Liskov substitution, Interface segregation and Dependency inversion), esto asegurando su mantenibilidad, escalabilidad y seguridad.


## Requisitos previos

### Programas
1. [x] Composer https://getcomposer.org/
2. [x] MariaDB https://mariadb.org/
3. [x] GIT

### Versiones
1. [x] Composer v2.3.2
2. [x] PHP v8.1.9
3. [x] MariaDB v10.8.3
4. [x] Laravel Framework v9.49.0

## Instalación
1. [x] Descargar el repositorio de https://github.com/luissantaospina/aveonline-web.git con el comando `git clone https://github.com/luissantaospina/aveonline-web.git`
2. [x] Moverse a la carpeta del proyecto `cd aveonline-api`
3. [x] Instalar dependencias `composer install`
4. [x] Generar llave de seguridad con `php artisan key:generate`
5. [x] Entrar al proyecto y duplicar el archivo `.env.example` renombrelo así `.env`
6. [x] **_IMPORTANTE_** en su ambiente local debe crear una base de datos de mariaDB llamada `aveonline`
7. [x] Ejecutar migraciones y seeders para crear y llenar las tablas en la base de datos anteriormente creada con `php artisan migrate --seed`

## Inicio
1. [ ] Iniciar el servidor con `php artisan serve`
2. [ ] Generalmente se despliega en http://localhost:8000/ (verificar puesto que esto puede cambiar)
