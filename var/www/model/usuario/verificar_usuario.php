<?php

if (isset($_POST["enviar"])) {
    require("controller/conexion.php");

    try {
        $query = "SELECT * FROM registrousuario where nombreusuario=:user";
        $resultado = $base->prepare($query);
        $user = htmlentities(addslashes($_POST["usuario"]));
        $resultado->bindValue(":user", $user);
        $resultado->execute();
        $numero_registro = $resultado->rowCount();
        if ($numero_registro != 0) {
            $registro = $resultado->fetch(PDO::FETCH_ASSOC);
            if ($_POST["contrasena"]==$registro["password"]) {
                session_start();
                $_SESSION["usuario"] = $user;
                echo '<script> window.location.replace("index")</script>';
            }else {
                echo '<script type="text/javascript">';
                echo "accessDeny();";
                echo "</script>";
            }
        }else {
            echo '<script type="text/javascript">';
            echo "accessDeny();";
            echo "</script>";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
