<!DOCTYPE html>
<html>
    <head><title></title><meta charset="utf-8"></head>
    <body>
        <?php
        /**
         * Se conecta a la base de datos
         * @return conexion retorna la conexion
         */
        function Conectarse() {
            $host = "localhost";
            $user = "root";
            $pass = "root";
            $bd = "inventariapp2";
            if (($conexion = mysql_connect($host, $user, $pass))) {
                mysql_select_db($bd, $conexion);
            }
            return $conexion;
        }
        ?>
    </body>
</html>