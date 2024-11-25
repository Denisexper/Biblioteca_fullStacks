<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://laravel.com/img/logomark.min.svg" width="100" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://laravel.com/img/logotype.min.svg" width="400" alt="Laravel"></a>
</p>
# Biblioteca con Filament y Laravel

Este es un proyecto de gestión de biblioteca desarrollado con **Filament** y **Laravel**. La aplicación permite administrar libros, autores, editoriales, géneros y préstamos de manera sencilla y eficiente. Además, incluye un dashboard con la visualización de estadísticas clave.

## Características

- Gestión completa de libros, autores, editoriales, géneros y préstamos.
- Dashboard interactivo que muestra resúmenes de las entidades.
- Diseño moderno y responsivo gracias a Filament.

## Ventajas de usar Filament

- **Panel administrativo rápido y moderno**: Filament proporciona un panel administrativo moderno y fácil de usar, lo que permite una rápida configuración de CRUDs sin necesidad de escribir mucho código manual.
- **Flexibilidad**: Filament está construido sobre Laravel, por lo que puedes personalizar casi cualquier parte del panel, integrando tus propias lógicas, autorizaciones y más.
- **Rendimiento optimizado**: Filament es ligero y está optimizado para proporcionar una experiencia fluida tanto para administradores como para usuarios finales.
- **Interfaz intuitiva**: Su interfaz es simple e intuitiva, lo que facilita la administración del contenido sin requerir experiencia técnica avanzada.
- **Modularidad**: Gracias a su sistema de recursos y widgets, Filament permite agregar fácilmente nuevas funcionalidades al panel administrativo sin romper la estructura existente.

## Requisitos

- PHP >= 8.0
- Composer
- Laravel >= 9.x
- MySQL o cualquier otra base de datos compatible con Laravel
- Filament >= 2.x

## Instalación

1. Clona el repositorio:
    ```bash
    git clone https://github.com/tu_usuario/biblioteca-filament.git
    cd biblioteca-filament
    ```

2. Instala las dependencias de PHP y JavaScript:
    ```bash
    composer install
    ```

3. Configura el archivo `.env` en este caso solo tienes que quitarle el .example al archivo y deberia de funcionar correctamente.

4. Ejecuta las migraciones y seeders:
    ```bash
    php artisan migrate --seed
    ```

5. Inicia el servidor de desarrollo:
    ```bash
    php artisan serve
    ```

## Uso

Una vez instalado, puedes acceder al panel de login a través de `/admin/login` y gestionar todas las entidades de la biblioteca.
