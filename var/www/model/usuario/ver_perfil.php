<?php

    $sql="SELECT * FROM registrousuario WHERE nombreusuario=:usuario";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":usuario",$usuario);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $personal = $registro["personal"];
    $tipo = $registro["tipo"];

    $sql="SELECT apepaterno, nombre FROM personal WHERE idpersonal=:personal";
    $resultado=$base->prepare($sql);
    $resultado->bindValue(":personal",$personal);
    $resultado->execute();
    $registro=$resultado->fetch((PDO::FETCH_ASSOC));

    $profilename = $registro["nombre"] . " " . $registro["apepaterno"];

?>