# AveonlineApi
Esta aplicación está construida con laravel.

Está implementa protección de rutas bajo el esquema de jwt (https://jwt.io/), esto permite tener seguridad de punta a punta respecto a toda la comunicación que ingresa en esta.
En la aplicación se combina los patrones de arquitectura MVC (Modelo vista controlador), DTO (Data Transfer Object), fachada y SOLID (Single responsibility, Open-closed, Liskov substitution, Interface segregation and Dependency inversion), esto asegurando su mantenibilidad, escalabilidad y seguridad.


## Requisitos previos

### Programas
1. [x] Composer https://getcomposer.org/
2. [x] MariaDB https://mariadb.org/
3. [x] GIT https://git-scm.com/

### Versiones
1. [x] Composer v2.3.2
2. [x] PHP v8.1.9
3. [x] MariaDB v10.8.3
4. [x] Laravel Framework v9.49.0

## Instalación
1. [x] Descargar el repositorio de https://github.com/luissantaospina/aveonline-api.git con el comando `git clone https://github.com/luissantaospina/aveonline-api.git`
2. [x] Moverse a la carpeta del proyecto `cd aveonline-api`
3. [x] Instalar dependencias `composer install`
4. [x] Entrar al proyecto y duplicar el archivo `.env.example` renombrelo así `.env`
5. [x] **_IMPORTANTE_** en su ambiente local debe crear una base de datos de mariaDB llamada `aveonline`
6. [x] Ejecutar migraciones y seeders para crear y llenar las tablas en la base de datos anteriormente creada con `php artisan migrate --seed`

## Inicio
1. [x] Iniciar el servidor con `php artisan serve`
2. [x] Generalmente se despliega en http://localhost:8000/ (verificar puesto que esto puede cambiar)
3. [x] Se anexa colección de postman en caso de requerirse para las pruebas en el archivo llamado `Aveonline.postman_collection.json`

## Restricciones técnicas
1. [x] Por motivos de la librería `JWT` para laravel, el usuario debe tener dos campos llamados `password` e `email`, estos nombres son difícilmente alterables por dicha librería, por ende se decide dejarlos así y no cumplir con la convención de la tabla esperada, esto claramente por cuestiones de tiempo, ya que editar a profundidad la librería conllevaría trabajo arduo. 
2. [x] Por convenciones de laravel y su manejo interno se decide dejar el nombre de las tablas en inglés, es de recalcar que este debería ser el estándar pero se busca cumplir a cabalidad con los criterios de aceptación.
