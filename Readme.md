# MVC Usuarios

Este mini proyecto consiste en la gestión básica de usuarios utilizando PHP y el modelo vista controlador

## Requisitos ⚒️

- xampp | wampserver | Servidor Apache
- Conexión a base de datos mediante MySql | PhpMyadmin
- Archivo Comprimido del proyecto o ruta del proyecto en Github

## Proceso de Ejecución 💻

- Descargar y/o descomprimir el proyecto y colocarlo en la ruta que requiera el servidor local a utilizar
- Dentro del proyecto se encuentra un archivo llamado admin_users.sql que contiene el script completo de la base de datos utilizada, este archivo se puede importar o ejecutar el script en forma de texto copiando y pegando su contenido.
- Modificar la cadena de conexión del proyecto siguiendo la ruta: Configurations/DbConection y colocar los valores de su acceso
- Ejecutar el proyecto, en mi caso accedo de la siguiente manera: "http://localhost:55/BrauliaGodoy/MVC_AdminUsers/"
- La base de datos por defecto tiene un usuario de cada tipo (Gerente, Empleado y Cliente), los datos para acceder a cada uno son: Para gerente, correo = gerente@gmail.com y contraseña es 123456; para empleado, correo = empleado@gmail.com y contraseña es $empleado, finalmente, para cliente correo = cliente@gmail.com y contraseña = @123456.

## Explicación ​📄​

> El proyecto cuenta con cinco carpetas que contienen la aplicación, un archivo index.php y el script de la base de datos.
>El archivo index se encarga de llamar al controlador por defecto que en este caso es Login y su respectivo metodo por defecto a ejecutar.
>Configurations, contiene la conexión a la base de datos y variables constantes que hacen referencia a el controlador por defecto que son utilizados en index.php.
>Libs, maneja los métodos para cargar tanto los controladores como llamar a los metodos que contienen.
>Controllers, contiene los tres controladores donde se crean los metodos encargados de comunicarse con los modelos y las vistas necesarias.
>Models, es el encargado de comunicarse con las tablas de la base de datos, contiene todos los métodos necesarios para interectuar con admin_users.
>Views, cuenta con todas las vistas de la mini-aplicación.

## Funcionamiento

Al ingresar sesión se accede a un menú diferente (manejado por sesiones) según el rol del usuario, en el caso de ser usuario Gerente, tendra acceso al mantenimiento de usuarios.
Se puede registrar un nuevo usuario dando clic en registrarse en la vista de Login, sin embargo, ese usuario que se creará será de tipo Cliente.
