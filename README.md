# SalesMaster

SalesMaster es un panel de control de acceso que permite crear, modificar o eliminar usuarios, así como acceder a diferentes aplicaciones de la empresa según el rol asignado a cada usuario.

## Características

- Gestión de usuarios (alta, edición, eliminación)
- Acceso a aplicaciones según el rol (Administrador, Usuario, Desarrollador)
- Panel de administración
- Interfaz adaptable para escritorio y móvil

## Requisitos

- PHP 8.x o superior
- Git

## Instalación


Antes de comenzar con la instalación, sigue estos pasos previos:

1. **Importa la base de datos:**  
    Localiza el archivo `salesmaster.sql` en la carpeta `/src/db/` y utiliza tu gestor de bases de datos favorito (por ejemplo, phpMyAdmin o la línea de comandos de MySQL) para importar este archivo en tu servidor de bases de datos.

2. **Configura la conexión a la base de datos:**  
    Abre el archivo `/src/db/database.php` y modifica los parámetros de conexión (`host`, `usuario`, `contraseña`, `nombre de la base de datos`) según la configuración de tu entorno.

Luego, continúa con los siguientes pasos:

3. **Clona el repositorio:**
```sh
git clone https://github.com/JoseTruDiv/app-asir-proyect.git
cd app-asir-proyect/proyectoasirdomain/app/public
```

4. **Arranca la aplicación con el servidor embebido de PHP:**

 ```php -S localhost:8000```