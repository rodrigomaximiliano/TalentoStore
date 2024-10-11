# TalentoStore

TalentoStore es una aplicación de una tienda web de insumos de computación, desarrollada como proyecto final de la capacitación y certificación en programación brindada por la UNNE/Telco/PoloIT.

![Captura de pantalla 2024-06-06 182034](https://github.com/rodrigomaximiliano/TalentoStore/assets/116413011/f8fdc36b-e513-4ea9-a4a3-9b60376217ed)



![Captura de pantalla 2024-06-06 182144](https://github.com/rodrigomaximiliano/TalentoStore/assets/116413011/81659fae-b864-4e72-9b15-1354a2b1830d)

![Captura de pantalla 2024-06-06 182228](https://github.com/rodrigomaximiliano/TalentoStore/assets/116413011/ca794739-7be8-4ae2-ba91-208118e7aa98)

![Captura de pantalla 2024-06-06 182653](https://github.com/rodrigomaximiliano/TalentoStore/assets/116413011/f9d9547d-3cb7-4445-838c-cb06b1bedc32)


La aplicación permite a los usuarios registrarse, iniciar sesión, ver los productos disponibles, añadir productos al carrito de compras, proceder al pago utilizando una pasarela de pago de testeo y ver los pedidos realizados. Además, la aplicación envía un correo electrónico de bienvenida cuando un nuevo usuario se registra y también cuando se realiza una compra con éxito.

Requisitos

    PHP = 8.1
    Laravel = 10
    Node.js = v18.18.0
    Bootstrap = v5.3
    Vue: "^3.3.11"
# Instalación

# Backend

    Clona el repositorio: git clone https://github.com/rodrigomaximiliano/TalentoStore.git

Entra en la carpeta del backend: cd TalentoStore/backend

    Instala las dependencias de PHP utilizando Composer: composer install
Configura el archivo .env con los detalles de tu base de datos.

Ejecuta las migraciones para crear las tablas en la base de datos: php artisan migrate

Llena la base de datos con datos de prueba: php artisan db:seed

Genera la clave de la aplicación: php artisan key:generate

Inicia el servidor del backend: php artisan serve

# Frontend

Abre otra terminal y entra en la carpeta del frontend: cd TalentoStore/frontend

Instala las dependencias de JavaScript: npm install

Compila los assets para desarrollo: npm run dev

    La aplicación estará corriendo en http://localhost:5173/.
# Contribuir

Si deseas contribuir a este proyecto, sigue estos pasos:

    Haz un fork del proyecto.
    Crea una nueva rama.
    Haz tus cambios y haz commit .
    Haz push a la rama .
    Crea un nuevo Pull Request.
