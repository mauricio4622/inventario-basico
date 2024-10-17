<?php

include("conexion.php");

if (isset($_POST["ingresar"])) {
    if(
        strlen($_POST["usurname"]) >= 1 &&
        strlen($_POST["password"]) >= 1 
        ) {
            $name = trim($_POST["usurname"]);
            $name = trim($_POST["password"]);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre,gmail)
                VALUES('$usurname', '$password', '$fecha')";
            $resultado = mysqli_connect($conexion, $consulta);
            if ($resultado) {
            ?>
                <h3 class="success">Tu registro se a completado</h3>
            <?php
            }  else{
            ?>
                <h3 class="error">Ocurrio un error</h3>
            <?php
            } 
        } else {
            ?>
                <h3 class="error">Llena todos los campos</h3>
            <?php
        } 

        

}

?>
