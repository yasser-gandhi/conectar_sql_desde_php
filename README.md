# conectar_sql_desde_php

El siguiente código sirve para comprobar la conexión de la base de datos MySQL desde PHP. La conexión debe sustituirse por los datos correspondientes a nuestra computadora:

### $conexion = mysqli_connect("tuServidor", "tuUsuario", "tuPassword", "tuBaseDeDatos", "elNumeroDePuerto");

Por ejemplo, 

$conexion = mysqli_connect("localhost", "root", "taroroot", "pruebas", "3306");
