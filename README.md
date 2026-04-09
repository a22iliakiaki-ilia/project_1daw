# 🕹️ GAMESTACK - CRUD de Videojuegos en PHP

Una aplicación web sencilla e intuitiva para gestionar un inventario de videojuegos. Este proyecto implementa un sistema CRUD (Crear, Leer, Actualizar, Eliminar) utilizando PHP y MySQL, con una interfaz moderna y responsiva basada en Bootstrap 5.

## 🚀 Características Principales

* **Dashboard Principal:** Una página de inicio amigable que te dirige a las funciones principales.
* **Gestión de Inventario:** Visualización de todos los videojuegos en una tabla dinámica.
* **Clasificación por Colores:** Los tipos de juegos tienen indicadores visuales de colores (Rol = Azul, Deportes = Amarillo, Peleas = Verde).
* **Agregar Nuevos Juegos:** Formulario para registrar el nombre, descripción y tipo de videojuego.
* **Ticket de Confirmación:** Pantalla de éxito tras registrar un juego nuevo, mostrando su ID y detalles.
* **Edición y Eliminación:** Opciones rápidas para modificar o borrar registros directamente desde la lista del inventario.

## 🛠️ Tecnologías Utilizadas

* **Backend:** PHP (con la extensión `mysqli` y sentencias preparadas para mayor seguridad).
* **Base de Datos:** MySQL.
* **Frontend:** HTML5, CSS personalizado básico y Bootstrap 5.
* **Iconos:** Bootstrap Icons.

## 📂 Estructura del Proyecto

El proyecto está dividido en módulos para facilitar su mantenimiento:

* `index.php`: Página de inicio y panel de control (Dashboard).
* `conexion.php`: Archivo de configuración que maneja la conexión a la base de datos MySQL.
* `header.php` / `footer.php`: Plantillas globales para la barra de navegación y el pie de página.
* **Crear (Create):**
    * `insertar.php`: Formulario para añadir un nuevo videojuego.
    * `registrar.php`: Procesa los datos del formulario y los inserta en la base de datos.
    * `ticket.php`: Pantalla de éxito que confirma el registro del nuevo juego.
* **Leer (Read):**
    * `mostrar.php`: Muestra la tabla con todo el inventario de juegos.
* **Actualizar (Update):**
    * `update.php`: Formulario pre-cargado con los datos del juego a editar.
    * `actualizar.php`: Procesa la actualización en la base de datos.
* **Eliminar (Delete):**
    * `delete.php`: Elimina de forma segura un registro basado en su ID.
