# Repositorio prueba técnica Solati

El proyecto esta realizado en **PHP** utilizando como motor de base de datos **MySQL**, en archivo **config.ini** esta la configuración para conexión a la base de datos.

A continuación se describen los pasos para ejecutar el proyecto.

1. Descargar el repositorio y correr el servidor web apache
2. Crear la base de datos según los parametros de conexión en el archivo de configuración **config.ini**.
3. Crear la tabla en la base de datos, la estructura sql esta en el archivo **users.sql**
4. Probar los servicios mediante los siguientes endpoints, para la prueba recomiendo usar postman:

   `GET - http://localhost/pruebaSolati/` obtiene todos los usuarios registrados.

   `POST - http://localhost/pruebaSolati/?url=usuarios/saveUser` guarda un nuevo usuario en la base de datos.

   Para enviar los datos al metodo post, se debe enviar mediante un objeto form-data en donde se envíe lo siguiente:

   ```javascript
   {
     "username": "nombre de prueba",
     "password": "ABCXXXXXX",
     "email": "correo@midominio.com"
   }
   ```
